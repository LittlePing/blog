<?php 
	// 将根路径的访问返回一个hello world 字符的显示
	Rourter::get('/',function(){
		return '<h1>This is the index page .</h1>';
	});
	// 当接收到一个post请求时，将会路由到/welcome的中间件时，利用函数将它返回到‘hello world’字符串
	Router::get('/welcome',function(){
		return view('welcome');
	});
	//当接收到一个put请求时，将会路由到foo/bar的中间件时，利用函数将它返回到‘hello

	Route::get('/abc/{name?}',function($name='abc'){
		return 'you name is $name';
	});

	// 当接收到一个delete请求时，将会路由到foo/bar的中间件时，利用函数将它返回到该显示字符串
	Route::get('/test',function($name='null'){
		return 'view(test=>['name=$name'])';
	});

	// 为多个动作注册路由
	/*Router::match (['get','post'],'/',function(){
		return 'hello world.';
	});*/

	// 使用any方法注册一个路由来响应所有的HTTP动作
	/*Router::any('foo',function(){
		return 'this is a any function.';
	});*/
    
	 /*生成路由对应的URLs，
	 可以使用帮助函数url来生成路由所对应的URLs
	 // $url = url('foo'); 
	*/

	 /*2.路由参数*/

	  // 2.1必选参数

	 // 1.捕捉URL中用户的ID
	  Router::get('user/{id}',function(){
	  	return 'User '.$id;
	  });

	  //2.捕捉多个参数

	  Rouer::get('post/{posts}/comment{comments}',function($postId,$commentId){
	  	//		  /////

	  });
   

      Router::get('/about',function(){
      	retrun view::make('home.index');
      });