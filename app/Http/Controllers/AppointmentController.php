<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    /**
     * appointment create
     */

     public function appointment_create()
     {
        $appointment = Appointment::all();
        return view('appoint.appoint_create',compact('appointment'));
     }


     public function appointment_add(Request $request)
     {
        $appontment = new Appointment;

        $appontment->appointment_no = $request->appointment_no;
        $appontment->appointment_date = $request->appointment_date;
        $appontment->doctor_id = $request->doctor_id;
        $appontment->patient_name = $request->patient_name;
        $appontment->patient_phone = $request->patient_phone;
        $appontment->total_fee = $request->total_fee;
        $appontment->paid_amount = $request->paid_amount;

        $appontment->save();
        return redirect()->back();
     }

     /**
      * appointment delete
      */
    public function appointment_delete(Request $request,$id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->back();
    }

    /**
     * appointment update
     */

     public function appointment_update(Request $request,$id)
     {
        $appointment = Appointment::find($id);
        return view('appoint.appointment_update',compact('appointment'));
     }

     public function appointment_update_post(Request $request,$id)
     {
        $appontment = Appointment::find($id);

        $appontment->appointment_no = $request->appointment_no;
        $appontment->appointment_date = $request->appointment_date;
        $appontment->doctor_id = $request->doctor_id;
        $appontment->patient_name = $request->patient_name;
        $appontment->patient_phone = $request->patient_phone;
        $appontment->total_fee = $request->total_fee;
        $appontment->paid_amount = $request->paid_amount;

        $appontment->save();
        return redirect()->back();
     }
}
