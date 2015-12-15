<?php
 use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 将根路径的访问路由到test模板
// Route::get('/', function () {
// 	// $hi = 'hello';
// 	// $object = '+++world';
//     // $data = array ('hi'=>$hi,'object'=>$object);
// 	$view = view('home.index',$data);
// 	// return view('home.index')->with($data);
// 	$view->hi = "你好";
// 	$view->object = "世界";
// 	return $view;
    


// });

//根据url的变量来获取其变量名

/*Route::get('/username/{name?}',array('as'=>'home_route',function($name='hello'){
	$hi = 'hello';
	$object;
	$view = view('home.index');
	$view->hi=$hi;
	$view->object=$name;
	return $view;
}))->where('name','[A-Za-z]+');

//////////////////
// 路由的命名应用与重定向  //
//////////////////
Route::get('/tell',function(){
	$url = URL::route('home_route');
	dd($url);
	return Redirect::route('home_route');
});

// 将访问到/about中间件路由到view视图/home/index.blade.php模板文件、
Route::get('/about',function(){
	$url = url('about');
	return $url;
	// return view('home.index');

});


//路由可选参数sdfsd

Route::get('user/{name?}',function($name=null){
	
	return view('test',["name"=>$name]); 
	
});


Route::get('user/{name?}',function($name='null'){

 	return $name;
});


//正则约束

  Route::get('user/{id}',function(){

  	return 'user'.$id;
  })->where('id','[^0-9]+');


Route::get('user/{id}/{name}',function($id,$name){
	return 'user'." ".$id." ".$name;
})->where(['id'=>'[0-9+]','name'=>'[a-z]+']);


*/


 // Route::get('/',function() {

 // 	$items = array(2,3,4,5,'somethings');
 // 	return view('home.index')->with('items',$items);

 // });


 
// Route::get('/get',function(){
// 	$view = view('getting',['name'=>'James']);
// 	return $view;
// });


// //通过ProductController控制器中的showProducts方法来指定路由
// Route::get('/test','ProductsController@showProduct');


// //HTTP控制器 3.控制器中间件

// //将特定的中间件分配到控制器中
// Route::get('profile',['middleware'=>'auth','uses'=>'UserController@showProfile']);



/*#4.RESful资源控制器
//4.1注册一个资源路由
Route::resoure('photo','PhotoController');

//4.2 定义部分资源路由

Route::resoure('photo','PhotoController',['only'=>['index','show']]);

Route::resource('photo','PhotoController',['except'=>['create','store','update']]);

//4.3命名资源路由，默认情况下，资源路由都有一个路由名称，我们可以传入一个name的数组来覆盖这些默认的名字。

Route::resource('photo','PhotoController',['name'=>['create'=>'photo.bulid']]);

//4.4嵌套资源的引用，比如一个图片资源里面可能里面包含了许多评论。此时用.来代替

// */
// Route::get('/photo/comment','PhotoController@show');

// Route::resource('photo.comments','PhotoController');



// #模板继承

// Route::get('photo/child','ProductsController@showProduct');

//定义登陆路由
// Route::get('/user/Login',function(){
//     return view('user.Login');
// });

// Route::get('user/submitLogin','UserController@submitLogin');


// Route::get('user/home',['middleware'=>'myauth']
// );





//注册服务提供者的测试路由

// Route::resource('test','TestController');

// Route::get('request/method','RequestController@getMethod');


/////////////////////////////
/////////////              //
//HTTP请求实例 //              //
//1.获取输入数据 //              //
 /////////////// //
/////////////////////
////////
////创建隐式控制器 
// Route::controller('request','RequestController');
// Route::post('/request/fileupload','RequestController@postFileUpload');






//文章增删改查的路由表项
// Route::get('/posts/index/','PostController@index');
// Route::get('/posts/show/{id}','PostController@show');
// Route::get('/posts/edit/{id?}','PostController@edit');
// Route::get('/posts/save/{id?}','PostController@save');
// Route::get('/posts/delete/{id?}','PostController@destroy');
// Route::get('/posts/add/','PostController@edit');




// //返回index.blade.php模板
// Route::get('/blade',function(){
// 	return view('layout.index');
// });
// Route::get('/test',function(){
// 	return view('boostrap.test');
// });




// fedora 

// index
Route::get('/',function(){
	return view('fedora.master');
});


//backgroud router
Route::get('/fedora/backgroud',function(){
	return view('fedora.backgroud');
});



//table router
Route::get('/fedora/table','FedoraController@index');
Route::get('/fedora/show/{id}','FedoraController@show');
Route::get('/fedora/edit/{id?}','FedoraController@edit');
Route::get('/fedora/save/{id?}','FedoraController@save');
Route::get('/fedora/add','FedoraController@edit');
Route::get('/fedora/delete/{id}','FedoraController@destroy');


//timeline
Route::get('fedora/timeline',function(){
	return view('fedora.modules.timeline');
});





// //routing to sign up 
// Route::get('/fedora/register',function(){
// 	return view('fedora.register');
// });


// //routing to sign in 
// Route::get('fedora/login',function(){
// 	return view('fedora.login');
// });



// // 认证路由...
// Route::get('/fedora/login', 'Auth\AuthController@getLogin');
// Route::post('/fedora/login', 'Auth\AuthController@postLogin');
// Route::get('/fedora/logout', 'Auth\AuthController@getLogout');
// // 注册路由...
// Route::get('/fedora/register', 'Auth\AuthController@getRegister');
// Route::post('/fedora/register', 'Auth\AuthController@postRegister');

// 


// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('profile','UserController@profile');










// // Response篇
// // 1.1 基本的响应
// Route::get('testResponse',function(){
// 	$content = 'Hello LaravelAcademy!';
// 	$status = 500;
// 	$value = 'text/html;charset=utf-8';
// 	return (new Response($content,$status))->header('Content-Type',$value);
// 	//return response($content,$status)->header('Content-Type',$value);
// });

// //1.2 添加cookie  
// //正如上面提到的，我们使用withCookie方法为响应添加cookie，由于header和withCookie支持方法链，所以我们可以这样使用：
// Route::get('testResponseCookie',function(){
// 	$content = 'Hello LaravelAcademy!';
// 	$status = 200;
// 	$value = 'text/html;charset=utf-8';
// 	//我们可以为cookie添加有效期，路径，作用域等信息。
// 	return (new Response($content,$status))->header('Content-Type',$value)->withCookie('site','LaravelAcademy.org','30',
// 		'/','laravel.app');
// 	//return response($content,$status)->header('Content-Type',$value);
// });


// // ResponseFactory篇
// // response函数如果不传入参数会返回 
// // Illuminate\Contracts\Routing\ResponseFactory契约的实现——Illuminate\Routing\ResponseFactory，
// // 该类中提供了多个方法用来生成更加丰富的响应类型，比如视图响应、JSON响应、文件下载等等。
// // 2.1 视图响应
// //使用view方法即可返回一个视图作为响应内容：
//  Route::get('testResponseView',function(){
//  	$value = "text/html;charset=utf-8";
//  	return response()->view('hello',['message'=>'Hello LaravelAcademy'])
//  	->header('Content-Type',$value);
//  });


// // 2.2 json响应
// Route::get('testResponseJson',function(){
//     return response()->json(['name'=>'LaravelAcademy','passwd'=>'LaravelAcademy.org'])->setCallback($request->input('callback'));
// });



// //2.3文件下载
// // 使用download方法可生成用于下载给定路径文件的响应，这里我们下载上一节上传的文件：
// Route::get('testResponseDownload',function(){
// 	return response()->download(realpath(base_path('public/image')).'/laravel-5-1.jpg','Laravel.jpg');
// });


// // 3 RedirectResponse篇
// // 3.1 基本重定向
// Route::get('dashboard',function(){
// 	return redirect('home/dashboard');
// });


// Route::post('user/profile', function () {
//     // 验证请求...
//     return back()->withInput();
// });

// // 3.2 重定向到命名路由
// Route::get('hello/laravelacademy/{id}',['as'=>'academy',function($id){
// 	return 'hello laravelacademy'.$id;
// }]);

// Route::get('testResponseRedirect',function(){
// 	return redirect()->route('academy','100');
// });


// // 3.3 重定向到控制器动作

// // 使用action方法重定向到控制器动作：

// Route::resource('post','PostController');

// Route::get('testResponseRedirect',function(){
//     return redirect()->action('PostController@index');
// });




// // 当然也可以传递参数到action方法：

// Route::get('testResponseRedirect',function(){
//     return redirect()->action('PostController@show',[1]);
// });



// // 3.4 带一次性Session数据的重定向

// // 使用with方法可以携带一次性session数据到重定向请求页面（一次性session数据即使用后立即销毁的session数据项）：

// Route::post('user/profile', function () {
//     // 更新用户属性...
//     return redirect('dashboard')->with('status', 'Profile updated!');
// });
// // 这种特性通常在提交表单验证失败返回错误信息时很有用。



// // 定义邮件发送路由
// Route::get('mail/send','MailController@send');






// //bootstrap test

// Route::get('/boostrap',function(){
// 	return view('boostrap.boostrap');
// });
// Route::get('/boostrap/modal',function(){
// 	return view('boostrap.modal');
// });

// Route::get('/bootstrap/table',function(){
// 	return view('bootstrap.table');
// });

// Route::get('/bootstrap/form',function(){
// 	return view('bootstrap.form');
// });

// Route::get('/bootstrap/carousel',function(){
// 	return view('bootstrap.carousel');
// });

// Route::get('/bootstrap/scroll',function(){
// 	return view('bootstrap.scroll');
// });
// Route::get('/bootstrap/tabs',function(){
// 	return view('bootstrap.tabs');
// });