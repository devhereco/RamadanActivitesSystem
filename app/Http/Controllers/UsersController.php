<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    public function index()
    {
        // $users['customers'] = User::all();
        $users = User::with('country')->orderBy('id', 'desc')->get(); 
        $countries = Country::get();

        return view('admin/users/index', compact('users', 'countries'));
    }

    public function destroy($id)
    {
        $destroy = DB::table('users')->where('id', $id)->delete();
        if ($destroy) {
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } else {
            return redirect()->back()->with('error', 'يوجد هناك خطأ!');
        }
    }
}
