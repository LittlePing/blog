<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestController extends Controller

{	//2.1获取输入
	public function getBasetest(Request $request)
	{
		$input = $request->input('test');
		echo $input;
	}

	

	//2.2获取请求的URL
	public function getUrl(Request $request)
	{
		//匹配/request/*的URL才能访问，否则抛出404错误
		if(!$request->is('request/*'))
		{
			abort('404');
		}

		$uri = $request->path();
		$url = $request->url();
		echo $uri;
		echo "<br>";
		echo $url;
	}


	//2.3 获取请求的方法
	public function getMethod(Request $request)
	{
		$method = $request->method();
		//非get请求不能请求
		if(!$request->isMethod('get'))
		{
			abort('404');
		}
		
		echo $method;
	}


	//3 获取输入的数据
	//3.1 当前的输入
	

	// public function getInputData(Request $request)
	// {
	// 	//获取GET方式的name参数值，默认为laravelacademy
	// 	$name = $request->input('name','laravelacademy')
	// 	// if()

	// }

}


	
	





















// public function getIndex(Request $request)
	// {	

	// 	$method = $request->method();
	// 	if($request->isMethod('get'))
	// 	{
	// 		echo $method;
	// 	}


	// 	$url = $request->url();
	// 	if($request->is('index/*'))
	// 	{
	// 		echo $url;
	// 	}
	// }