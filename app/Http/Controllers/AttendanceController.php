<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller {

    public function __construct() {
        date_default_timezone_set('Asia/Manila');
    }

    public function index() {

        return view('attendance');

    }

    public function timeIn(Request $request) {
        $img = $request->image;
        $empId = $request->empId;
        $status = $request->status;
        $empPass = $request->empPass;
        $currentDate = date('Y-m-d');
        $currentTime = date('H:i:s');

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        switch ($status) {
            case 'IN';
            $lists = DB::table('attendance')
                        ->where('empID','=',$empId)
                        ->where('date_log','=',$currentDate)
                        ->where('attendance_status','=',$status)
                        ->get();

                if($lists->isEmpty()) {
                    $fileName = $empId.'-'.$currentDate.'-'.$status.'.png';
                    // Storage::disk('public')->put($fileName, $image_base64); -- not yet (avoiding file size expansion :D)
                    attendance::insert([
                        'empID' =>$empId,
                        'date_log' => $currentDate,
                        'time_log' => $currentTime,
                        'attendance_status' => $status,
                        'attendancePic' => $fileName
                    ]);
                    return redirect('/')->with('alert', 'Successfully time in!');
                } else {
                    return redirect('/')->with('alert', 'Already timed in!');
                }

            break;

            case 'OUT';
            $lists = DB::table('attendance')
                        ->where('empID','=',$empId)
                        ->where('date_log','=',$currentDate)
                        ->where('attendance_status','=',$status)
                        ->get();

                if($lists->isEmpty()) {
                    $fileName = $empId.'-'.$currentDate.'-'.$status.'.png';
                    // Storage::disk('public')->put($fileName, $image_base64); -- not yet (avoiding file size expansion :D)
                    attendance::insert([
                        'empID' =>$empId,
                        'date_log' => $currentDate,
                        'time_log' => $currentTime,
                        'attendance_status' => $status,
                        'attendancePic' => $fileName
                    ]);
                    return redirect('/')->with('alert', 'Successfully time out!');
                } else {
                    return redirect('/')->with('alert', 'Already timed out!');
                }
            break;
        }
    }
}
