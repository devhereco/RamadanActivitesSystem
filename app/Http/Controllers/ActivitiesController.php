<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use DB;
use Validator;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('id', 'desc')->get();    

        return view('admin/activities/index', compact('activities'));
    }

    public function create()
    {
        return view('admin/activities/create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title' => 'required',
                'content' => 'required',
                'day' => 'required',
                'status' => 'required',
            ]
        );
        if(!$validator->fails()){ 

            $activity = new Activity;
            $activity->title = request('title');
            $activity->content = request('content');
            $activity->youtube = request('youtube');
            $activity->month = request('month');
            $activity->day = request('day');
            $activity->status = request('status');

            $activity->save();

            return redirect()->back()->with(['success' => 'تم الإنشاء بنجاح!']);
        }else{

            return redirect()->back()->with(['warning' => 'فشل الإرسال، الرجاء المحاولة مجدداً!']);
        } 
    }

    public function edit($id)
    {
        $activity = Activity::where('id', $id)->first();
        // dd($activity);

        return view('admin/activities/edit', compact('activity'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title' => 'required',
                'content' => 'required',
                'day' => 'required',
                'status' => 'required',
            ]
        );
        if(!$validator->fails()){ 

            $activity = Activity::where('id', $request->activity_id)->first();
            
            if(!$activity){
                $activity = new Activity();
                $activity->id = request('activity_id');
            }
            $activity->title = request('title');
            $activity->content = request('content');
            $activity->day = request('day');
            $activity->status = request('status');

            $activity->save();

            if (app()->getLocale() == 'en') {
                return redirect()->back()->with(['success' => 'Your message was successfully sent to the relevant department!']);
            } else {
                return redirect()->back()->with(['success' => 'تم بنجاح ، إرسال رسالتك إلى القسم المختص!']);
            } 
        }else{
            if (app()->getLocale() == 'en') {
                return redirect()->back()->with(['warning' => 'Submission failed, please try again!']);
            } else {
                return redirect()->back()->with(['warning' => 'فشل الإرسال، الرجاء المحاولة مجدداً!']);
            }   
         } 
    }

    public function destroy($id)
    {
        $destroy = DB::table('activities')->where('id', $id)->delete();
        if ($destroy) {
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } else {
            return redirect()->back()->with('error', 'يوجد هناك خطأ!');
        }
    }
}