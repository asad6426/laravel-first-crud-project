<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class chack extends Controller
{
    public function use()
    {
        
        return view('semester');
    }
    public function insertSmester(Request $reqest)
    {
        $s=array();
       
        $s['semester']=$reqest->semester;
        $insert=DB::table('teachers_semester')->insert($s);
        return view('semester');
       
    }
    public function roomblade()
    {
        return view('room');
    }
   public function roomInfo(Request $request)
   {
       $r=array();
       $r['room_number']=$request->room_number;
       $r['room_type']=$request->room_type;
       $r['academic_building']=$request->academic_building;
       $r['floor_number']=$request->floor_number;
       $insert=DB::table('teachers_room')->insert($r);
       return view('room');
       //return response()->json($r);
       //echo "<pre>";
       //print_r ($r);
   }
   public function teacherblade()
   {
       return view('teachers_info');
   }
   public function teacherInfo(Request $request)
   {
    $r=array();
    $r['tid']=$request->tid;
    $r['t_name']=$request->t_name;
    $r['t_i_name']=$request->t_i_name;
    $r['email']=$request->email;
    $r['phone_number']=$request->phone_number;
    $r['max_cr']=$request->max_cr;
    $r['day_off']=$request->day_off;
    $r['day_off2']=$request->day_off2;
    $insert=DB::table('teachers_information')->insert($r);
    return view('teachers_info');
       //echo "<pre>";
       //print_r ($r);
   }
   public function courseblade()
   {
       return view('course_info');
   }
   public function courseInfo(Request $request)
   {
    $r=array();
    $r['semester_id']=$request->semester_id;
    $r['batch']=$request->batch;
    $r['level_term']=$request->level_term;
    $r['course_code']=$request->course_code;
    $r['course_title']=$request->course_title;
    $r['course_hour']=$request->course_hour;
    $insert=DB::table('teachers_course_table')->insert($r);
    return view('course_info');
       //echo "<pre>";
       //print_r ($r);
   }
   public function allRoom()
   {
       $room=DB::table('teachers_room')->get();
       //return response()->json($room);
       return view('allRoom',compact('room'));
   }
   public function allSemester()
   {
    $room=DB::table('teachers_semester')->get();
    //return response()->json($room);
    return view('allSemester',compact('room'));
   }
   public function allCourse()
   {
    $room=DB::table('teachers_course_table')->get();
    //return response()->json($room);
    return view('allCourse',compact('room'));
   }
   public function allTeacher()
   {
    $room=DB::table('teachers_information')->get();
    //return response()->json($room);
    return view('allTeacher',compact('room'));
   }
   public function routine()
   {
       return view('routine');
   }
   public function build(Request $r)
   {
   // $room=DB::table('teachers_course_table')->pluck('course_code');

   // foreach ($room as $title) {}
        $insert=DB::table('saturday')->where('id', '=', 1)->insert('cse121');
        
    
    //return response()->json($room);
   }
   
    
}
