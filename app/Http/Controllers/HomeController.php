<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Crypt;
use App\Models\Property;
use App\Models\ComponentPermissions;
use App\Models\Users;
use App\Http\Controllers\baseController;
use App\Helpers;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $data['property_list']=Property::with('category','location','purpose','rentperiod','features','gallery')->get();
        //  return $data;
        return view('Home.index',$data);
    }
    public function detail($id){
        $data['property_list']=Property::with('category','location','purpose','rentperiod','features','gallery')->where('id',$id)->first();
        //  return $data;
        return view('Home.detail',$data);
    }
    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();

        if ($user && $user->role_id == 1) {
            return view('Dashboard.index');
        } elseif ($user) {
            return view('Dashboard.Notfound');
        }

        // Handle the case when no user is found
        return view('Dashboard.Notfound');
    }



}
