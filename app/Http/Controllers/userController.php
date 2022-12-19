<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;
use Exception;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
        $users1= User1::paginate(5);
        return view('users1.create')->with (compact('users1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users1.create');
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
        User1::create($input);
        return redirect('user')->with('thongbao','Đã thêm thành công');  
        }catch (Exception $e){
        return redirect('user')->with('loi', 'Da loi');    
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
        $user= User1::find($id);
        return view('Users1.edit')->with('users1',$user);
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
            $user = User1::find($id);
            $input = $request->all();
            $user -> update($input);
            return redirect('user')->with('sua', 'Da loi');     
        }catch (Exception $e){
            return redirect('Users1.edit')->with('loi', 'Da loi');    
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
        $user1 = User1::find($id);
        $user1->delete();
        return redirect('user')->with('xoa', 'Da thanh cong');
    }
}
