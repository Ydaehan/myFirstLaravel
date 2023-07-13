<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->middleware = 'TestMiddleWare';
        // 이 라인 위에 클로저나 컨트롤러 실행 전에 할 작업을 기술
        Log::info('요청한 놈의 IP 주소:'.$request);
        Log::info('요청 경로:'.$request->path());
        $response = $next($request);
        // print("TestMiddleWare가 실행되었습니다!");
        Log::info('회원가입 폼 요청이 정상적으로 처리되었음');
        $response->header('status', 201);
        return $next($request);
    }
}
