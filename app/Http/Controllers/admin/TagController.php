<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagCreateRequest;
use App\Http\Requests\TagUpdateRequest;


class TagController extends Controller
{



protected $fields = [
        'tag' =>'',
        'title'=>'',
        'subtitle'=>'',
        'page_image'=>'',
        'meta_description'=>'', 
        'layout'=>'fedora.blog.admin.tag.index',
        'reverse_direction'=> 0 ,
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::All();
        return view('fedora.blog.admin.tag.index')->withTags($tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        foreach($this->fields as $field =>$default){
            $data[$field] = old($field,$default);
        }

        return view('fedora.blog.admin.tag.create',$data);
    }

   // 修改 store() 方法代码如下
/**
 * Store the newly created tag in the database.
 *
 * @param TagCreateRequest $request
 * @return Response
 */
public function store(TagCreateRequest $request)
{
    $tag = new Tag();
    foreach (array_keys($this->fields) as $field) {
        $tag->$field = $request->get($field);
    }
    $tag->save();

    return redirect('/admin/tag')
                    ->withSuccess("The tag '$tag->tag' was created.");
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  

        $tag = Tag::findOrFail($id);
        $data = ['id' => $id];
        foreach (array_keys($this->fields) as $field) {
        $data[$field] = old($field, $tag->$field);
         return view('fedora.blog.admin.tag.edit', $data);
     }
    

}

    
// 替换 update() 方法如下
/**
 * Update the tag in storage
 *
 * @param TagUpdateRequest $request
 * @param int $id
 * @return Response
 */
    public   function update(TagUpdateRequest $request, $id)
    {

            $tag = Tag::findOrFail($id);

            foreach (array_keys(array_except($this->fields, ['tag'])) as $field) {
                $tag->$field = $request->get($field);
            }
            $tag->save();

            return redirect("/admin/tag/$id/edit")
                            ->withSuccess("Changes saved.");
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public  function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect('/admin/tag')->withSuccess("The '$tag->tag' tag has been deleted.");
    }

}
