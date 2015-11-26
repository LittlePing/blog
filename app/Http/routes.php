            <?php

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


 
Route::get('/get',function(){
	$view = view('getting',['name'=>'James']);
	return $view;
});


//通过ProductController控制器中的showProducts方法来指定路由
Route::get('/test','ProductsController@showProduct');


//HTTP控制器 3.控制器中间件

//将特定的中间件分配到控制器中
Route::get('profile',['middleware'=>'auth','uses'=>'UserController@showProfile']);



/*#4.RESful资源控制器
//4.1注册一个资源路由
Route::resoure('photo','PhotoController');

//4.2 定义部分资源路由

Route::resoure('photo','PhotoController',['only'=>['index','show']]);

Route::resource('photo','PhotoController',['except'=>['create','store','update']]);

//4.3命名资源路由，默认情况下，资源路由都有一个路由名称，我们可以传入一个name的数组来覆盖这些默认的名字。

Route::resource('photo','PhotoController',['name'=>['create'=>'photo.bulid']]);

//4.4嵌套资源的引用，比如一个图片资源里面可能里面包含了许多评论。此时用.来代替

*/
Route::get('/photo/comment','PhotoController@show');

Route::resource('photo.comments','PhotoController');



#模板继承

Route::get('photo/child','ProductsController@showProduct');

//定义登陆路由
Route::get('/user/Login',function(){
    return view('user.Login');
});

Route::get('user/submitLogin','UserController@submitLogin');


Route::get('user/home',['middleware'=>'myauth']
);


//文章增删改查的路由表项
Route::get('/posts/index/','PostController@index');
Route::get('/posts/show/{id}','PostController@show');
Route::get('/posts/edit/{id?}','PostController@edit');
Route::get('/posts/save/{id?}','PostController@save');
Route::get('/posts/delete/{id?}','PostController@destroy');
Route::get('/posts/add/','PostController@edit');

//返回index.blade.php模板
Route::get('/blade',function(){
	return view('layout.index');
});
Route::get('/test',function(){
	return view('boostrap.test');
});
Route::get('/boostrap',function(){
	return view('boostrap.boostrap');
});
Route::get('/boostrap/modal',function(){
	return view('boostrap.modal');
});

Route::get('/',function(){
	return view('fedora.master');
});





//注册服务提供者的测试路由

Route::resource('test','TestController');

// Route::get('request/method','RequestController@getMethod');


/////////////////////////////
/////////////              //
//HTTP请求实例 //              //
//1.获取输入数据 //              //
 /////////////// //
/////////////////////
////////
////创建隐式控制器 
Route::controller('request','RequestController');







Route::get('/boostrap/table',function(){
	return view('boostrap.table');
});

Route::get('/boostrap/form',function(){
	return view('boostrap.form');
});