<?php

namespace App\Http\Controllers;
use App\User;//thêm dòng này
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return " this is index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return " this is create";
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
        return " this is store";
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $users = User::find($id);
        $users->delete();
      
    }
    public function run()
    {
        
      $users =User::all();//model lay model roi model tra ve
     //$users =User::find($id);//model lay model roi model tra ve
    //return view('user',['abc'=>$users]);//view --$users la ten.tra ve cho ong view
     return view('user',['abc'=>$users]);//view --$users la t
    //return "He;ldssx";
   // return $users;
}
public function user($id)
    {
        
    $users =User::find($id);//model lay model roi model tra ve
    //return view('user',['abc'=>$users]);//view --$users la ten.tra ve cho ong view
   // return view('user',['abc'=>$users]);//view --$users la t
   return $users;
}
public function xoanguoidung($id)
    {
        // $users = User::find($id);
        // $users->delete();
        // return "Đã Xóa Ngừoi DÙng";
    
     }

}
