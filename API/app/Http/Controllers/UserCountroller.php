<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserCountroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllUsers()
    {
       $users=User::all();
       return response()->json(['Users'=>$users,'state'=>200]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],

        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }
        $register=new User();
        $register->name=$request->name;
        $register->email=$request->email;
        $register->phone=$request->phone;



        $register->password=  Hash::make($request->password);
        $register->save();
        $token = $register->createToken('auth_token')->plainTextToken;
        return response()
        ->json(['access_token' => $token, 'token_type' => 'Bearer', 'user_ifo' => $register]);
    }


public function login(Request $request){
    $errors = [];
        $user = User::where('email', $request['email'])->first();
        // return $user ;
        if (!$user) {
            $errors = ['email' => 'Wrong Email'];
            return response()
                ->json(
                    $errors,
                    401
                );
        }
        // return $errors;
        if ($user && !Hash::check($request['password'], $user->password)) {
            $errors = ['password' => 'Wrong password'];
            return response()
                ->json(
                    $errors,
                    401
                );
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi ' . $user->name . ', welcome ', 'access_token' => $token, 'token_type' => 'Bearer', 'user_ifo' => $user]);
    }




    public function showSingleUser($id)

    {
        $user=User::find($id);
        return response()->json(['user'=>$user,'statu'=>200]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = User::find($id);

        $update->name=$request->name;
        $update->email=$request->email;
        $update->phone=$request->phone;



        $update->password=  Hash::make($request->password);
        $update->update();
        return response()->json(['message' => "success Update User  $update->name", 'state'=>200]);

    }


    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return response()->json(['message' => "success Delete User ", 'state'=>200]);
    }
}
