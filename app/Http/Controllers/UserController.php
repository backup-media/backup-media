<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Hash;
use App\ActivityLog;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $count_user = $users->count();
        //dd($users);
        return view('backend.users.index', compact('users'), compact('count_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();

        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['email_verified_at'] = $request->email_verified_at;

        User::insert($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $historiques = ActivityLog::where('user_id','=', Auth::User()->id)->limit(20)->get();
        return view('backend.users.profile', compact('historiques'));
    }
    public function profile(User $user)
    {
        return view('backend.users.regular-info');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = array();
        $data['name'] = $request->full_name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;

        User::where('id','=', Auth::User()->id)->update($data);
        return back();
    }

    public function password(Request $request){
        return view('backend.users.changepassword');        
    }

    public function changepassword(Request $request){
            $data = array();
            $data['password'] = Hash::make($request->nouveau_password);
            User::where('id','=', Auth::User()->id,$request->last_password == Auth::User()->password)->update($data);
        return back();
        
    }
    public function Historique(){
        $historiques = ActivityLog::where('user_id','=', Auth::User()->id)->get();
        return view('backend.users.profile', compact('historiques'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
