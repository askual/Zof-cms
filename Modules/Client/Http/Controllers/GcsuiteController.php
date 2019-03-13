<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class GcsuiteController extends Controller
{
    public function adminauth(){
        $passcode = $_GET['passcode'];
        $r = DB::table('client-gsuite_admins')->where('passcode', $passcode)->first();
        if($r==null){
            $r = ['status'=>'wrong'];
        }else{
            DB::table('client-gsuite_admins')
                ->where('passcode', $passcode)
                ->update(['active' => 1,'passcode'=>null]);
        }
        return response()->json($r);
    }
    public function create_superadmin(Request $request){
        $faker = Faker::create();
        $university  = $request['university'];
        $passcode = $faker->randomLetter.$faker->randomLetter.$faker->randomLetter.$faker->randomLetter.$faker->randomDigit.$faker->randomDigit; 
        $r = DB::table('client-gsuite_admins')->insert(
            ['passcode' => $passcode, 'university' => $university,'role'=>'superadmin']
        );
        if($r!=null){
            $r = ['status'=>'success'];
        }else{
            $r = ['status'=> 'error'];
        }
        return response()->json($r);
    }
    public function request_admin(Request $request){
        $university  = $request['university'];
        $department  = $request['department'];
        $tg_name  = $request['tg_name'];
        $section  = $request['section'];
        $r = DB::table('client-gsuite_admins')->insert(
            ['department' => $department, 'university' => $university,'section'=>$section,'role'=>'admin',
            'tg_name'=>$tg_name]
        );
        if($r){
            $h = ['status'=>'success'];
        }else{
            $h = ['status'=>'error'];
        }
        return response()->json($h);
    }
    public function request_admin_list(Request $request){
        $university  = $request['university'];
        $r = DB::table('client-gsuite_admins')->where(['university'=>$university,'active'=>0])->get();
        $r2 = DB::table('client-gsuite_admins')->where(['university'=>$university,'active'=>1])->get();
        return response()->json([
            'active'=> $r2,
            'inactive'=> $r
        ]);
    }
    public  function approve_representative(){
        $rid = $_GET['rep_id'];
        $decision = $_GET['decision'];
        if($decision == "yes"){
            $t = DB::table('client-gsuite_admins')
                ->where('id', $rid)
                ->update(['active' => 1]);
        }else{
            $t = DB::table('client-gsuite_admins')
                ->where('id', $rid)
                ->delete();
        }
        if($t){
            $s = "success";
        }else{
            $s = "error";
        }
        return response()->json([
            'status'=> $s
        ]);
    }

    public function add_last_word(Request $request){
        $university  = $request['university'];
        $department  = $request['department'];
        $section  = $request['section'];
        $tg_name  = $request['tg_name'];
        $tg_username  = $request['tg_username'];
        $tg_id  = $request['tg_id'];
        $id_number = $request['id_number'];
        $name = $request['name'];
        $sex = $request['sex'];
        $lastword = $request['lastword'];
        $phone_number = $request['phone_number'];

        $r = DB::table('client-gsuite_lastwords')->insert(
            [
                'department' => $department, 'university' => $university,'section'=>$section,
                'tg_name'=>$tg_name,'tg_id' => $tg_id, 'tg_username' => $tg_username,
                'name' => $name, 'sex' => $sex, 'lastword'=> $lastword, 'phone_number'=> $phone_number, 'id_number' => $id_number
            ]
        );
        if($r){
            return response()->json([
                'status'=> "success"
            ]);
        }else{
            return response()->json([
                'status'=> "error"
            ]);
        }
    }
    public function last_words(Request $request){
        $department = $request['department'];
        $section = $request['section'];
        $university = $request['university'];
        $s = DB::table('client-gsuite_lastwords')->where(['department' => $department,'section'=>$section, 'university'=> $university])->get();
        return response()->json($s);
    }

    public function unapprove_last_word(){
        $id = $_GET['id'];
        $decision = $_GET['decision'];
        if($decision == "no"){
            DB::table('client-gsuite_lastwords')->where('id' , $id)
                ->update(['active'=>0]);
        }else{
            DB::table('client-gsuite_lastwords')->where('id' , $id)
                ->update(['active'=>1]);
        }
        return response()->json([
            'status' => 'success'
        ]);        
    }

}
