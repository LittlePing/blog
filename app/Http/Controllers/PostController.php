<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Cache;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //list all the articles 列表显示所有文章
    public function index()
    {
        //Get many Eloquent models
        $posts = Post::orderBy('id', 'asc')->get();
        //$posts = Post::where('id','>',1)->take(2)->get();
        #dd($posts);
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    //查看每一篇文章的信息
    public function show($id)
    {
//

        $post = Post::where('id', '=', $id)->get();
//
        return view('post.show', ['posts' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    //编辑文章的信息
    public function edit(Request $request,$id=NULL)
    {

            if (isset($id))
         {

                $post = Post::find($id);

        } 
        else
        {
            $post = new Post();
        }
        return view('post.edit')->with('posts', $post);
    }
//        else{
//            echo '更新文章失败！';
//        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    //保存修改或者新建的数据
    public function save(Request $request, $id = NULL)
    {
        //获取修改过来的ID

        if (isset($id)) {
//
            Post::updateOrCreate(['id' => $id], $request->input());

        } else {
            Post::create($request->input());
        }
        return  redirect('/posts/index');
    }

    //删除数据
    public function destroy(Request $request,$id=NULL)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts/index');


    }

}
//        $post = Cache::get('posts',[]);
//
//        if(!$post||!$post[$id])
//        {
//            exit('Nothing to delete');
//        }
//            unset($post[$id]);
//            Cache::decrement('post_id', 1);

 //  every Eloquent mode is a query-builder
//        $posts = Post::where('id','<','3')->orderBy('id','desc')->take(1)->get();
//        //既然Eloquent模型是查询构建器，自然也支持分组块获取数据：\
//        $chunk = Post::chunk('2',function($posts){
//            foreach($posts as $post){
//                echo $post->title.'<br>';
//            }
//        });

        //Get the single model

//        $post = Post::find(1);
//
//        //Not Found Exception
//        $model = Post::findOrFail(1);
//        $model = Post::where('id','>','10')->firstOrFail();
//
//        //4.1获取聚合
//        $count = Post::where('active',1)->count();
//        $max = Post::where ('active',1)->max('price');







    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        $input = [
//            'title'=>'test 6 title',
//            'content'=>'test content 6',
////            'cat_id'=>1,
////            'views'=>200,
////            'user_id'=>1
//        ];
//        $post = Post::find($id);
//        if($post->update()){
//            echo '更新文章成功！';
//            dd($post);
//        }else{
//            echo '更新文章失败！';
//        }
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 *

 */
//    public function create(Request $request)
//    {
//        $input=['id'=>2,'title'=>'hello','content'=>'hello world'];
//        $post = new Post;
//        $post->create($input);
//       if( $post->save()){
//           echo '增加成功';
//           return view('post.index');
//       }
//        else{
//            echo '增加失败';
//        }
//    } 