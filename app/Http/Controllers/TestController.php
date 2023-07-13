<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create(): View // blade 파일을 연결 시키려면 return type을 View로 설정해야한다
    {
        return view('member.create',['middleware'=> "수업마치자"]);
    }
    
}
