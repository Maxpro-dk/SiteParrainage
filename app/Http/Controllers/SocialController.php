<?php


namespace App\Http\Controllers;

use Exception;
use Validator;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function facebookRedirect(Request $request)
    {   
        $state = $request->parent_id;
        return Socialite::driver('facebook')->with(["state"=>$state])->redirect();
    }
    public function loginWithFacebook(Request $request)
    {
        // try {
            
            $parent_id= $request->state;
            $user = Socialite::driver('facebook')->stateless()->user();
            $isUser = User::where('fb_id', $user->id)->first();
            $parentUser =User::where('id',$parent_id )->first();
            if($isUser){
                Auth::login($isUser);
                return redirect('/');
            }else if($parentUser) {

                $createUser = new  User();
                $createUser->name = $user->name;
                $createUser->email = $user->email;
                $createUser->fb_id = $user->id;
                $createUser->parent_id = $parentUser->id;
                $createUser->password= Hash::make(uniqid());
                
                $createUser->save();
    

                Auth::login($createUser);
                return redirect('/');
            }else {
                return redirect()->route('login');
            }
    
        // } catch (Exception $exception) {
        //     dd($exception->getMessage());
        // }
    }
}