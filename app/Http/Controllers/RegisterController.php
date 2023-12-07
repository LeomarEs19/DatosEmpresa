<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function crear(){
        return view(view: 'auth.register');
    }

    public function creacion(){
        return view(view: 'auth.login');
    }
    public function index(){
        return view (view:'auth.register');
    }
    public function store(Request $request){
        //dd($request -> get(key: 'name'));
        $this ->validate($request,[
            'name'=>'required | min:3 |max:30' ,
        
            'username'=>'required |unique:users|min:3|max:30',

            'card'=> 'required |unique:users|min:2|max:15',
        
            'email'=>'required |unique:users|email|max:60',

            'address'=>'required |min:10|max:20',

            'phone'=>'required |unique:users|min:5|max:15',
    
            'password'=>'required|confirmed|min:8|max:15',
        
            'password_confirmation'=>'required'

        ]);

        
        User::create([
            'name' => $request->name, 
            'username' => str::lower ($request->username), 
            'card' => $request->card,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone, 
            'password' =>  $request->password
        ]);
       

        return redirect()->route('post.index');

        //autenticar
    
        auth() -> attempt([
            'email' => $request -> email,
            'password' => $request -> password
        ]);

        //Redireccionar

        return redirect() -> route(route:'post.index');


        //otra forma de autenticar

        /*auth()-> attempt($requesto -> only('email', 'password'));*/

    }
}

    



?>