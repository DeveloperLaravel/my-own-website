<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $req)
    {
        
         $req->validate(['name'=>'required','email'=>'required|email|unique:users','password'=>'required|min:6']);
        $user = User::create(['name'=>$req->name,'email'=>$req->email,'password'=>bcrypt($req->password)]);
        $user->token = $user->createToken('api')->plainTextToken;
        return redirect()->route('home',['User' => $user]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $req)
    {
        $req->validate(['email'=>'required|email','password'=>'required']);
        $user = User::where('email',$req->email)->first();
        if(!$user || !Hash::check($req->password, $user->password)) {
            return back()->withErrors(['login'=>'بيانات غير صحيحة']);
        }
        Auth::login($user);

             if ($req->wantsJson()) {
        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    $req->session()->regenerate();

    return redirect()->route('home');
            //   return view('pages.dart.index',['user' => $user]);

    }
    
        // return  redirect()->intended(route('dart', ['user' => $user->id]));
        
        // return redirect()->intended('/dart'); // ✅
    

   
    


    /**
     * Display the specified resource.
     */
  
    /**
     * Update the specified resource in storage.
     */
     public function user(Request $request)
    {

        return response()->json($request->user());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(Request $req)
    {
        // $request->user()->currentAccessToken()->delete();
        // return response()->json(['message'=>'تم تسجيل الخروج بنجاح'],200);

         $req->user()->currentAccessToken()->delete();
        return redirect()->route('login.index');
    }
   
}
