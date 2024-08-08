<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\admin;

class admincontroller extends Controller
{
    public function admin(Request $req){
        $data=new admin;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->save();
        return redirect('adminlogin');

    }    

    public function adminlogin(Request $req){

        $user=admin::Where(['email'=>$req->email])->first();
        if(!$user || $req->password !==$user->password){
            return "invail email or password";
        }
        Session::put('person', $user);
        
            return redirect("name");
        
    }
}
