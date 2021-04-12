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
                'date' => 'required',
                'status' => 'required',
            ]
        );
        if(!$validator->fails()){ 
            $activity = new Activity;
            if ($request->audioFile != null){
                $file = $request->file('audioFile');
                $filename = $file->getClientOriginalName();
                $filename = time() . '.' . $filename;
                
                $path = $file->storeAs('public', $filename);
                $path_db = 'storage'. '/' . $filename;
                $activity->audioFile = $path_db;
            }
            $activity->title = request('title');
            $activity->content = request('content');
            $activity->day = request('day');
            $activity->isQuran = request('isQuran');
            $activity->youtube = request('youtube');
            $activity->month = request('month');
            $activity->date = request('date');
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
                'date' => 'required',
                'status' => 'required',
            ]
        );
        if(!$validator->fails()){ 

            $activity = Activity::where('id', $request->activity_id)->first();
            
            if(!$activity){
                $activity = new Activity();
                $activity->id = request('activity_id');
            }
            if ($request->audioFile != null){
                $file = $request->file('audioFile');
                $filename = $file->getClientOriginalName();
                $filename = time() . '.' . $filename;
                
                $path = $file->storeAs('public', $filename);
                $path_db = 'storage'. '/' . $filename;
                $activity->audioFile = $path_db;
            }
            $activity->title = request('title');
            $activity->isQuran = request('isQuran');
            $activity->content = request('content');
            $activity->youtube = request('youtube');
            $activity->day = request('day');
            $activity->month = request('month');
            $activity->date = request('date');
            $activity->status = request('status');

            $activity->save();

            return redirect()->back()->with(['success' => 'تم الإنشاء بنجاح!']);
        }else{
            return redirect()->back()->with(['warning' => 'فشل الإرسال، الرجاء المحاولة مجدداً!']);
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
