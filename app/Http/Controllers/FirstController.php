<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    // home method______
        public function show(){
        $json = DB::table('students')
        ->paginate(3,['*'],'users')
        ->fragment('users');
        //it's return json data
        // $json->withPath('/admin/users');
        return view('users',['info' => $json]);
        // return $json;
        }
    // End home method______

    // show user details method_______
        public function allUser(string $id){
            $userView = DB::table('students')//it's return json data
            ->where('id',$id)
            ->get();
            return view ('user',['uId' => $userView]);
        }
    // End method ______

//  this is adduser method__________
       
        public function newUser(){
            return view('addUser');
        }
        public function addUser (Request $req){
            $user = DB::table('students')//it's return json data
                    ->insert(
                        [
                            "name" => $req->name,
                            "email" => $req->email,
                            "city" => $req->city,
                            "age" => $req->age,
                            "phone" => $req->phone,
                        ]
                    );
                    if($user){
                        return redirect()->route("home");
                    }else{
                        echo " <h1>Duplicate Email Address</h1> ";
                    }
        }
   // End method__________


    // update methods ________
        public function updateField ( string $id){
            //  $user = DB::table('students')
            // ->where('id',$id)->first();
            // $user = collect(json_decode($json));
            $user = DB::table('students')->find($id); // this is short way
            return view('update',['data' => $user]);
        }
        public function updateUserData(Request $req , string $id)
        {
            // return $req;
            $user = DB::table('students')
            ->where('id',$id)
            ->update([
                        "name" => $req->username,
                        "email" => $req->useremail,
                        "city" => $req->usercity,
                        "age" => $req->userage,
                        "phone" => $req->userphone,
                    ],

                );
            if ($user){
                return redirect()->route("home");
            }else{
                echo " <h1>Not updated</h1> ";
            }
        }
    // end update method _____
    
    //  delete method _________
        public function deleteUser ($id){
            $user = DB::table('students')//it's return json data
            ->where('id',$id)
            ->delete();
            if ($user){
            return redirect()->route("home");
            }
        }

        public function deleteAllUser (){
            $user = DB::table('students')->truncate();//it's return json data
        }
//    end delete method ____ 

}
