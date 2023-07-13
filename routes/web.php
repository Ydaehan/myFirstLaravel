<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* get 방식의 '/' 요청이 오면, 두번째 인자로 전달되는 클로저 함수를 실행하라 */
// 두번째 인자로 전달된 클로저 함수를 실행하면
// welcome blade 파일을 실행하고 그 결과로 생성되는 HTML을 클라이언트에게 전달한다

Route::get('/', function () {
    return view('welcome');
});

/* get 방식의 '/test1' 요청이 오면, test blade 파일을 실행하고
    그 결과로 생성되는 HTML을 클라이언트에게 전달하기 위한 
    라우팅 정보를 기술해봐라 */
Route::get('/test1', function() {
    return view('test', ['name' => '유대한']);
});

Route::get('/test2', function() {
    return "동해물과 백두산이";
});

Route::get('/user/{id}', function(string $id) {
    return 'User'.$id;
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    return view('test2',['postName:'=> $postId,'comment' => $commentId]); 
});

Route::post('/create', function(Request $req) {
    return "생성 요청이 처리되었습니다.[".$req->input('email').','.$req->input('name')."]";
    // return response()->json(['message' => 'success'],200);
});

// Route::post('/create', function() {
//     // return "생성 요청이 처리되었습니다.";
//     return response()->json(['message' => 'success'],200);
// });

// Route::get('/create', function(Request $req) {
//     return view('member.create',['middleware'=>$req->middleware]);   // //views/member/create.blade.php 실행
// })->middleware(App\Http\Middleware\TestMiddleware::class);

Route::get('/create', [TestController::Class, 'create']);