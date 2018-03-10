<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function getStateList(Request $request)
    {
        $states = DB::table("teachers")
            ->where("department",$request->country_id)
            ->pluck("name","id");

        return response()->json($states);
    }

    public function getMobileNumber(Request $request)
    {
        $mobile = DB::table("students")->select('mobile')
            ->where("mobile",$request->mobile)
            ->count();

        return response()->json($mobile);

    }

    public function getEmail(Request $request)
    {
        $email = DB::table("students")->select('email')
            ->where("email",$request->email)
            ->count();
        return response()->json($email);
    }

}

