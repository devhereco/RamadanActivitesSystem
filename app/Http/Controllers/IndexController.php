<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use App\Models\Activity;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Validator;
// use App\User;
use App\Models\User;

Date::setLocale('ar');

class IndexController extends Controller
{
    public function index()
    {
        $this_month = Carbon::now()->month;
        $activities = Activity::where('status', '=', 1)->whereMonth('date', $this_month)->orderBy('date', 'asc')->get();
        $user_activities = UserActivity::get();

        return view('frontend.index', compact('activities', 'user_activities'));
    }

    public function statics()
    {
        $users = User::count();
        $activities = Activity::count();
        $userActivities = UserActivity::count();
        $user_activities = UserActivity::with('user', 'activity')->take(20)->get();

        return view('frontend.statics', compact('user_activities', 'userActivities', 'activities', 'users'));
    }

    public function activity_view($id)
    {
        $activity = Activity::with('activity')->where('status', '=', 1)->where('id', $id)->first();   
        $user_activities = UserActivity::where('activity_id', '=', $id)->where('user_id', '=', auth()->user()->id)->get(); 

        return view('frontend.activity.view', compact('activity', 'user_activities'));
    }

    public function save_progress(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'activity_id' => 'required',
            ]
        );
        if(!$validator->fails()){ 

            $activity = UserActivity::where('activity_id', $request->activity_id)->first();
            
            if(!$activity){
                $activity = new UserActivity();
                $activity->activity_id = request('activity_id');
            }
            $activity->user_id = auth()->user()->id;
            $activity->status = 1;

            $activity->save();

            return redirect()->route('home')->with(['success' => 'تم بنجاح ، إرسال رسالتك إلى القسم المختص!']);
        }else{
            return redirect()->back()->with(['warning' => 'فشل الإرسال، الرجاء المحاولة مجدداً!']);
         } 
    }

}