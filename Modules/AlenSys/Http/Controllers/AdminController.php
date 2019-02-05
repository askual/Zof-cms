<?php

namespace Modules\AlenSys\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AlenSys\Entities\Member;
use Modules\AlenSys\Helpers\CypherHelper;
use Carbon\Carbon;
use Faker\Factory as Faker;
class AdminController extends Controller
{
    public function __construct(){
		$this->middleware('isAdmin');
    }
    public function payment(){
            // $faker = Faker::create();
            // for ($i=0; $i < 30; $i++) { 
            //     Member::create([
            //         'name' => $faker->name,
            //         'phone' => $faker->e164PhoneNumber,
            //         'email' => $faker->email,
            //         'address' => $faker->address,
            //         'sex' => $faker->randomElement($array = array ('M','F'))
            //     ]);
            // }   

        // return Member::find(1)->downline;
        // $officialDate = Carbon::now()->toRfc2822String();
        // return Carbon::now()->year;
        // return Carbon::now()->month;
        // return $officialDate;
        // return now()->month;
        return view('alensys::admin.payment',[
            'members' => Member::all()
        ]);
        return CypherHelper::cypher('Kibru Demeke');
    }
    public function members(){
        return view('alensys::admin.members',[
            'members' => Member::all()
        ]);
    }
    public function member_single($id){
        $member = Member::findOrFail($id);
        // return $member->upline;
        return view('alensys::admin.member_single',[
            'member' => $member
        ]);
    }
    public function members_add(Request $request){
        Member::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'sex' => $request['sex']
        ]);
        return redirect()->back();
    }

    // public function 
}
