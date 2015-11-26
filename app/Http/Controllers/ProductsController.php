<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }


//创建showproduct的方法来显示产品的信息
    public function showProduct()

    {
        $products = array ('egg','apple','banana','pear');
        $prices = ['11','12','13','14'];
        return view('photo.child',['products'=>$products,'prices'=>$prices]);
    }
}

/*class UserController extends Controller
{
    /*
     * 实例化一个新的UserController对象
     *
     * @param  int  $id
     * @return void
     */
//    public function _construct()
//{
//    $this->middleware('auth');
//    $this->middleware('log',['only'=>['fooAction','tooAction']]);
//    $this->middleware('subscribed',['except'=>['helloAction','byeAction']]);
//}
//
//}

//class PhotoController extends Controller
//{
////    显示指定的照片评论
///*
// * @param int commentId
// * @param int photoId
// * Return Response
// * translator http://www.laravel-academy.org
// *
// *
// */
//    public function show()
//    {   $animals = array (1=>'dog','cat','bear','fox');
//        return view('photo.comment')->with($animals);
//    }
//}

