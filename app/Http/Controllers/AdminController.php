<?php

namespace App\Http\Controllers;

use view;
use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class AdminController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
        $this->middleware("isAdmin");

    }

    public function index(){
       
        $users= User::where("admin","!=",null)->get();

        if(!Gate::allows('yesadmin')) return view("user_dashboard");
        return view("dashboard",compact("users"));
        
    }

    public function user_store(Request $request){
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
             
        ]);
       
       

        $user = new User();
        $user->name = $request->name;
        $user->email =$request->email;
        $user-> password=Hash::make($request->password);
        $user->first_pass =$request->password;
        $user->admin=0;
        $user-> parent_id=Auth::id();
        $user->save();
     

        return redirect()->route("dashboard");

    }

    public function user_add(){


        return view("user_add");
    }
    public function profile(){
        if(!Gate::allows('yesadmin')) return view("profile");
        return view("admin_profile");
        
    }

  
    public function gen_link(Request $request){
        if(Auth::user()->linked!=null){
            $link = Auth::user()->linked;
        }else{
            $link = new Link();
        }
        
        $link->user_id= Auth::id();
        $link->uid = uniqid();
        $link->save();

        return redirect()->route("profile");
        
    }
 

    public function see_profile($id){
      $user =  User::where("id",$id)->firstOrFail();
      return view("see_profile",compact("user"));

    }
}
