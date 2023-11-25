<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("signup");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'profil' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
        ]);

      if($request->hasFile('profil')){
        $fileOriginalName = $request->profil->getClientOriginalExtension();
        $profil = time() .'.'. $fileOriginalName;
        $request->profil->storeAs('profiles', $profil, 'public');

      }else{
        $profil=null;
      }






        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'profil' => $profil,
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();

        return redirect()->route('home');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return view("user.myaccount");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       if(Auth::user()->id==$id){
        $user = User::find($id);
        return view("user.editaccount", compact("user"));
       }else{
        return redirect()->route("home");
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Auth::user()->id==$id){
            $user = User::find($id);

            $request->validate([
                'name' => 'required|min:3|max:50',
                'profil' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
            ]);





            $user->name = $request->name;
            if(!empty($request->password)) {
                $request->validate(['password' => 'confirmed|min:8']);
                $user->password = $request->password;

            };


            if($request->hasFile('profil')){
                $fileOriginalName = $request->profil->getClientOriginalExtension();
                $profil = time() .'.'. $fileOriginalName;
                $request->profil->storeAs('profiles', $profil, 'public');
                if($user->profil!=null){

                        Storage::disk('public')->delete('profiles/' . $user->profil);

                }

                $user->profil=$profil;
            }
            $user->save();
            return redirect()->route('show', $id);
           }else{
            return redirect()->route("home");
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function loginPage()
    {
        return view("login");
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'email or password is incorrect');



    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        session()->regenerate();
        return redirect()->route("home");
    }
}
