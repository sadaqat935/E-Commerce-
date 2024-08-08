<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Website;

class UserController extends Controller
{
    public function login(Request $req) {

        $user = Website::where(['email' => $req->email])->first();

        if (!$user || $req->password !== $user->password) {
            // User not found
            return 'Invalid email or password.';
        }
        Session::put('user', $user);

        return redirect("product");
        

    }

    public function register(Request $req)
    {
        $user = new Website;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password; // Encrypt the password before saving
        $user->save();

        $verificationUrl = route('verification.verify', ['id' => $user->id, 'hash' => sha1($user->email)]);

        // Send the verification email
        Mail::to($user->email)->send(new VerifyEmail($verificationUrl));

        return redirect('login')->with('success', 'Registration successful! Please check your email for verification.');
    }

    public function verify(Request $request, $id, $hash)
    {
        $user = Website::find($id);

        if (!$user || sha1($user->email) !== $hash) {
            return redirect('/')->with('error', 'Invalid verification link');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/')->with('success', 'Email verified successfully');
    }

    static public function count(){
        return Website::all()->count();
      }

      public function customers(){
        $data= Website::all();
        return view('customers',['customers'=>$data]);
    }
    public function deleteCustomer($id)
    {
        $customer = Website::findOrFail($id);
        $customer->delete();

        return redirect('customers');
    }
}
    

