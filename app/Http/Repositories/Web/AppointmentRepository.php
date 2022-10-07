<?php 

namespace App\Http\Repositories\Web;

use App\Models\{Setting, Appointment, Doctor, Department};
use App\Http\Requests\AppointmentPostRequest;
use App\Http\Interfaces\Web\AppointmentInterface;


 class AppointmentRepository implements AppointmentInterface
 {
    public function index()
    {
      $data['settings']    = Setting::first();
      $data['doctors']     = Doctor::select('img','name','about')->where('active','=','1')->limit(3)->get();
      $data['departments'] = Department::select('id','name')->where('active','=','1')->get();

      return view('web.appointment.index',$data);
    }

    public function store(AppointmentPostRequest $request)
    {
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
      $doctors = Doctor::with('department')
      ->select('doctors.id as doctor_id','doctors.name as doctor_name')
      ->where('department_id','=',$id)
      ->get();
      return response()->json($doctors);;
    }
 }