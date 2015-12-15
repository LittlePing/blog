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
	// 
	// 
	
    public function getInputData(Request $request)
    {	
    	// //获取get方式传递的name参数，默认为LaravelAacademy
    	// $name = $request->input('name','laravelAcademy');
    	// echo $name;
    	// echo '<br>';
    	// echo $request->input('test.0.name');
    	

    	$allData = $request->all();
    	$onlyData = $request->only('test','hello');
    	$execptData = $request->except('hello');
    	echo '<pre>';
    	print_r($allData);
    	print_r($onlyData);
    	print_r($execptData);
    }



    // 3.2 获取上一次请求
    public function getLastRequest(Request $request)
    {
    	// 将上一次请求存入session里面
    	//$request->flash();
    	//上次请求保存数据后重定向到当前请求URL,再次刷新页面后，session里面的数据会被清除
    	return redirect('/request/current-request')->WithInput();
    }

    public function getCurrentRequest(Request $request)
    {
    	//使用old方法获取session保存的数据
    	$lastRequestsData = $request->old();
    	echo '<pre>';
    	print_r($lastRequestsData);

    }	

		
		// 4.获取Cookie数据
		// 
		// 4.1 获取当前的cookie
		
    public function getCookie(Request $request)
    {
    	// $cookies = $request->cookie();
    	// dd($cookies);
    	//重新定义方法
    	$cookies = $request->cookie('website');
    	echo $cookies;
    }

      //4.2 调用Response实例上的withCookie方法新增cookie
      public function getAddCookie(Request $request)
      {
      	//利用Respone实例化调用withCookie方法
      	$response = new Response();
      	//第一参数是cookie名，第二个参数是cookie值，第三个是有效期
      	$response->withCookie(cookie('website','laravelacademy','1'));
      	//如果想要使得cookie长期有效的话，可以使用一下方法
      	//$response->withCookie(cookie()->forever('website','laravel'));
      	return $response;
      }


      // 5 文件上传
      //文件上传表单
      public function getFileUpload(Request $request)
      {	 
	
    	$postUrl = '/request/fileupload';
      	$csrf_field = csrf_field();
      	return view('instances.fileupload',['postUrl'=>$postUrl]);
      	
 	  }

      //文件上传处理

      public function postFileUpload(Request $request)
      {
		//1.判断请求中是否包含name=file 上传文件
		if(!$request->hasFile('file')){
			exit('上传文件为空');
		}
		$file = $reuqest->file('file');
		//2.判断文件上传过程是否会出现错误
		if(!$file->isValid()){
			exit('文件上传出错');
		}

		//3.设定文件的上传路径和文件名		
		$destPath = realpath(base_path('public/images'));
		if(!file_exists($destPath))
			mkdir($destPath,0755,true);
		$filename = $file->getClientOriginalName();
		if(!$file->move($destPath,$filename)){
			exit('文件上传失败');
		}
		exit ('文件上传成功');
      }

}
	
	



	
	
	





















// public function getIndex(Request $request)
// 	{	

// 		$method = $request->method();
// 		if($request->isMethod('get'))
// 		{
// 			echo $method;
// 		}


// 		$url = $request->url();
// 		if($request->is('index/*'))
// 		{
// 			echo $url;
// 		} 
//    }