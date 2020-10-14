<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request){
        if($request->hasFile('image')){
          User::uploadAvatar($request->image);
          $request->session()->flash('message','image uploaded');
          return redirect()->back();
          
          
           
        }
        $request->session()->flash('error','image not uploaded');
        return redirect()->back();
       
        
        
    }
    
    public function index(){
        // $data=[
        //     'name'=>'ali',
        //     'email'=>'ali@gmail.com',
        //     'password'=>'1245'
        // ];
        // User::create($data);
        $user=User::all();
        return $user;
        // $user=new User();
        // $user->name='usman';
        // $user->email='hamza@gmail.com';
        // $user->password=bcrypt('12345');
        // $user->save();
        // User::where('id',2)->update(['name'=>'wajid']);
        // User::where('id',2)->delete();

       
    // DB::insert('insert into users(name,email,password)
    // values(?,?,?)',[
    //     'usman','usman@gmail.com','password'
    // ]);
    // DB::update('update users set name=? where id=1',['usman1']);
    // DB::delete('delete from users where id=1');
    // $users=DB::select('select * from users');
        
    }
}
