<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Environment\Console;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function login(Request $request){
        $rule = ['username' => 'required', 'password' => 'required'];
        $validation = Validator::make($request->all(), $rule);
        if($validation->fails()){
            return $validation->messages();
        }

        // if(is_numeric($request->username)){
        //     $userExist = User::where('mobile_no', $request->username)->first();
        //     if($userExist){
        //         if(Hash::check($request->password, $userExist->password)){
        //             return 'mobile no and password match';
        //         }
        //     }
        //     return 'invalid credentials';
        // }
        // else{
        //     $userExist = User::where('email', $request->username)->first();
        //     if($userExist){
        //         if(Hash::check($request->password, $userExist->password)){
        //             return 'Email and password match';
        //         }
        //     }
        //     return 'invalid credentials';
        // }

        // return $request->all();
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
        $rule = ['username' => 'required', 'password' => 'required'];
        $validation = Validator::make($request->all(), $rule);
        if($validation->fails()){
            return $validation->messages();
        }
        $code = $this->generateCode();
        if(is_numeric($request->username)){
            $alreadyExist = User::where('mobile_no',$request->username)->first();

            if(!$alreadyExist){
                $UserAdded = User::create([
                    'mobile_no' => $request->username,
                    'password' => Hash::make($request->password),
                    'sms_code' => Hash::make($code),
                    'sms_verified' => '0',
                ]);
                $this->sendCodeSMS($request->username, $code);
                if($UserAdded){
                    return 1;
                }
            }
            return 2;
        }
        else{
            if(filter_var($request->username, FILTER_VALIDATE_EMAIL)){
                $alreadyExist = User::where('email',$request->username)->first();
                if(!$alreadyExist){
                    $UserAdded = User::create([
                        'email' => $request->username,
                        'password' => Hash::make($request->password),
                    ]);
                    if($UserAdded){
                        return 1;
                    }
                }
                return 2;
            }
            return 3;
        }
        return 0;
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

    public function generateCode(){

        $chars = '012345679QWERTYUIOPASDFGHJKLZXCVBNM';

        return substr(str_shuffle($chars), 0, 6);

    }

    public function sendCodeSMS($phoneNumber, $code){
        $result = $this->itexmo($phoneNumber,
        "Use ".$code." as your verification code to activate your eTax account." );

        if ($result == ""){
            echo "iTexMo: No response from server!!!
            Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.
            Please CONTACT US for help. ";
        }else if ($result == 0){
            echo "Message Sent!";
        }
        else{
            echo "Error Num ". $result . " was encountered!";
        }
    }

    function itexmo($number,$message){
        $ch = curl_init();
        $itexmo = array('1' => $number, '2' => $message, '3' => "PR-AKTUS396566_1UJ92");
        curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return curl_exec ($ch);
    }
}
