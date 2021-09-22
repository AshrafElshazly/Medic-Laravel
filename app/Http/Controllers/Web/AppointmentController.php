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
      $data['settings']    = Setting::where('active','=',1)->first();
      $data['doctors']     = Doctor::select('img','name','about')->where('active','=','1')->limit(3)->get();
      $data['departments'] = Department::select('id','name')->where('active','=','1')->get();

      return view('web.appointment.index',$data);
    }

    public function store(Request $request)
    {
      $request->validate([
        'name'        => 'required|string|max:100',
        'phone'       => 'required|numeric|max:15',
        'email'       => 'required|email|max:100',
        'date'        => 'required|date',
        'doctor'      => 'required|string',
        'department'  => 'required|string',
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