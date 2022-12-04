<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Crud;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function registerUser(Request $req){
        // dd($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);

        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>hash::make($req->password),
        ]);

        return redirect()->route('login')->with('success','Registered successfully');
    }

    public function loginUser(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);


        if(Auth::attempt($req->only('email','password'))){
            return redirect('/list');
            // dd($req->all());
        }else {
            return back()->with('fail','User not found');
        }
    }

        
    public function logout(){
        
        auth()->logout();

        return redirect()->route('login'); 
     }

     public function list(){
        // $crud = Crud::all();
        
        // return view('crud.list', ['data' => $crud]);
        return view('crud.list',['cruds'=> Crud::all()]);
     }

     
     public function store(Request $request){
        $image = $request->file('image')->getClientOriginalName();
        
        $request->image->move(public_path('images'), $image);
        $crud =new Crud();
        $crud->brand = $request->brand;
        $crud->name = $request->name;
        $crud->price = $request->price;
        $crud->image = $image;
        $crud->remarks = $request->remarks;
        $crud->save();

        return redirect()->route('list');

     }

     public function edit($id){
        
        $cruds =Crud::where('id', "=", $id)->first();

       return view('/crud.edit', compact('cruds'));
    }

    public function update(Request $request){
        // validating the form
        $request->validate([
            'brand' => 'required',
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'remarks' => 'required',
        ]);

        // dd($request->all());

        $id = $request->id;
        $brand = $request->brand;
        $name = $request->name;
        $price = $request->price;
        $image = $request->file('image')->getClientOriginalName();
        $remarks = $request->remarks;
        
        

        Crud::where('id', '=', $id)->update([
            'brand' => $brand,
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'remarks' => $remarks,
        ]);

        return redirect('/list')->with('success', 'Updated Successfully');
    }

    public function delete($id){
        Crud::where('id', '=', $id)->delete();

        return redirect('/list')->with('success', 'Deleted Successfully');
    }
    
}