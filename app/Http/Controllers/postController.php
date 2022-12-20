<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Models\User1;
class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = DB::table('posts')
        ->join('users1', 'posts.id_user','=','users1.id')
        ->select('users1.name', 'posts.*')
        ->orderBy('posts.id')
        ->get();
        $user = DB::table('users1')
        ->select('users1.*')
        ->get();
      return view ('posts.create')->with(compact('post','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            try{
            $input = $request->all();   
            Post::create($input);
            return redirect('posts')->with('thongbao');  
            }catch (Exception $e){
            return redirect('posts')->with('post');  
            }
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
        $post= Post::find($id);
        $user = DB::table('users1')
          ->select('users1.*')
          ->get();
        return view('posts.edit')->with(compact('post','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $post = Post::find($id);
            $input = $request->all();
            $post -> update($input);
            return redirect('posts')->with('sua', 'Da loi');     
        }catch (Exception $e){
            return redirect('posts.edit')->with('loi', 'Da loi');    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('posts')->with('xoa', 'Da thanh cong');
    }
}
