<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('list-students');
    }
    public function register(Request $request)
    {
        // validation
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:students",
            "password" => "required|confirmed"
        ]);
    // create data
        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->phone_no = isset($request->phone_no) ? $request->phone_no : "";
    $student->save();
      // send response
        return response()->json([
            "status" => 1,
            "message" => "Student registered succesfully"
        ]);
    }
    public function login(Request $request)
    {
        // validation
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
// check student
        $student = Student::where("email", "=", $request->email)->first();
if(isset($student->id)){
if(Hash::check($request->password, $student->password)){
// create a token
                $token = $student->createToken("auth_token")->plainTextToken;
/// send a response
                return response()->json([
                    "status" => 1,
                    "message" => "Student logged in successfully",
                    "access_token" => $token
                ]);
            }else{
return response()->json([
                    "status" => 0,
                    "message" => "Password didn't match"
                ], 404);
            }
        }else{
return response()->json([
                "status" => 0,
                "message" => "Student not found"
            ], 404);
        }
    }
    // PROFILE API
    public function profile()
    {
        return response()->json([
            "status" => 1,
            "message" => "Student Profile information",
            "data" => auth()->user()
        ]);
    }
// LOGOUT API
    public function logout()
    {
        // auth()->user()->tokens()->delete();
   return response()->json([
            "status" => 1,
            "message" => "Student logged out successfully"
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}