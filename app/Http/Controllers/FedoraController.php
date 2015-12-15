<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Fedora;
use Cache;

class FedoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //Get many Eloquent models
        $fedoras = Fedora::orderBy('id', 'asc')->get();
        //$posts = Post::where('id','>',1)->take(2)->get();
        #dd($posts);
        return view('fedora.operator.table', ['fedoras' => $fedoras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fedora = Fedora::where('id','=',$id)->get();
        return view('fedora.operator.show',['fedoras'=>$fedora]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id=NULL)
    {
        if (isset ($id))
        {
            $fedora = Fedora::find($id);
        }
        else
        {
            $fedora = new Fedora();
        }
        return view('fedora.operator.edit')->with('fedoras',$fedora);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request, $id=NULL)
    {
        //获取修改过来的ID 
        if (isset($id))
        {
            Fedora::UpdateOrCreate(['id'=>$id],$request->input());
        }
        else
        {
            Fedora::create($request->input());
        }
        return redirect('/fedora/table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id=NULL)
    {
        $fedora = Fedora::find($id)->delete();
        return redirect('/fedora/table');
    }
}
