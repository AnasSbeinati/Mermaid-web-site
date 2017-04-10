<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Follower;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function request_booking(Request $request)
    {
        //send mail
        try {
            $user = new Booking();
            $user->first_name = $request['first_name'];
            $user->second_name = $request['second_name'];
            $user->email = $request['email'];
            $user->address = $request['address'];
            $user->phone_number = $request['phone_number'];
            $user->apartment_number = $request['apartment_number'];
            $user->booking_date = $request['booking_date'];
            $user->comments = $request['comments'];
            $user->save();
//            $req['email'] = "test";
//            Mail::to("a7medsshahin@gmail.com")->send(new RequestBooking($req));
            return response()->json([], 200);
        } catch(\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function send_message(Request $request)
    {
        //send mail
        try {
            $user = new Message();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->message = $request['message'];
            $user->phone_number = $request['phone_number'];
            $user->save();
//            $req['email'] = "test";
//            Mail::to("a7medsshahin@gmail.com")->send(new RequestBooking($req));
            return response()->json([], 200);
        } catch(\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function request(Request $request)
    {
        //send mail
        try {
            $user = new \App\Request();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone_number = $request['phone_number'];
            $user->save();
//            $req['email'] = "test";
//            Mail::to("a7medsshahin@gmail.com")->send(new RequestBooking($req));
            return response()->json([], 200);
        } catch(\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function follow(Request $request)
    {
        //send mail
        try {
            $user = new Follower();
            $user->email = $request['email'];
            $user->save();
            return response()->json([], 200);
        } catch(\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function sign_up(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users,email'
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 401);
            }
            $user = new User();
            $user->first_name = $request['first_name'];
            $user->second_name = $request['second_name'];
            $user->email = $request['email'];
            $user->address = $request['address'];
            $user->phone_number = $request['phone_number'];
            $user->apartment_number = $request['apartment_number'];
            $user->booking_date = $request['booking_date'];
            $user->password = sha1($request['password']);
            $user->save();
            return response()->json($user, 200);
        } catch(\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
    public function login(Request $request)
    {
        try {
            $user = User::where([['email', '=', $request['email']], ['password', '=', sha1($request['password'])]])
                    //->where())
                    ->first();
            if($user)
                return response()->json($user, 200);
            return response()->json([], 401);
        } catch(\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
