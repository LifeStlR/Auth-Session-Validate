<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function Index()
    {
        if(Auth::check())
        {
            return view('welcome');
        }
        else
        {
            return Redirect::to('login');
        }
    }

    public function Login()
    {
        return view('login');
    }

    public function Register()
    {
        return view('register');
    }

    public function PostRegister(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            ]);
             
            $data = $request->all();
     
            $check = $this->create($data);
           
            return Redirect::to("/")->withSuccess('Great! You have Successfully loggedin');
    }
    
    public function PostLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data))
        {
            return Redirect::to('/');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'role' => $data['role'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $users = User::where('name', 'like', '%' . $search . '%')->orWhere('role', 'like', '%' . $search . '%')->select('name','role')->get();
        $userreturn = array();
        $usertemp = array();
        if(sizeof($users) > 0){
            foreach ($users as $index=>$user) {
                array_push($usertemp, $user);
            if($index%3 == 2 || $index == sizeof($users)-1){
                array_push($userreturn, $usertemp);
                $usertemp = array();
                }
            
            }
        }
        error_log(json_encode($userreturn));
        return view('search')->with('users', $userreturn);
    }

    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect::to('login');
    }

    public function Profile()
    {
        $data= array(
            'name' => Auth::user()->name,
            'role' => Auth::user()->role,
            'email' => Auth::user()->email,
        );
        return view('profile')->with('data',$data);
    }

    public function UpdateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($request->name != '')
        {
            $user->name = $request->name;
        }  
        if($request->role != '')
        {
            $user->role = $request->role;
        }
        if ($request->password != '')
        {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return Redirect::to('/');
    }

    public function DeleteProfile()
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return Redirect::to('/');
    }
}
