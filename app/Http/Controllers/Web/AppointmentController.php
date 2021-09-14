<?php

namespace App\Http\Controllers\web;

use App\Models\Doctor;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Department;

class AppointmentController extends Controller
{
    public function index()
    {
      $data['settings']    = Setting::first();
      $data['doctors']     = Doctor::select('img','name','about')->where('is_top','=','1')->limit(3)->get();
      $data['departments'] = Department::select('id','name')->get();

      return view('web.appointment.index',$data);
    }

    public function store(Request $request)
    {
      $request->validate([
        'name'        => 'required|string|max:35',
        'phone'       => 'required',
        'email'       => 'required|email',
        'date'        => 'required|date',
        'doctor'      => 'required',
        'message'     => 'required|string'
      ]);

    Appointment::create([
        'name'      => $request->name,
        'email'     => $request->email,
        'phone'     => $request->phone,
        'date'      => date('Y/m/d',strtotime($request->date)),
        'doctor_id' => $request->doctor,
        'message'   => $request->message,
    ])->save();

     return redirect()->back();
    }

    public function getDoctors($id)
    {
      $doctors = Doctor::join('departments','department_id','=','departments.id')
      ->select('doctors.id as doctor_id','doctors.name as doctor_name')
      ->where('department_id','=',$id)
      ->get();
      return response()->json($doctors);;
    }
}
