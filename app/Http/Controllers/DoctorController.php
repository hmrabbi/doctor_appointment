<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * doctor create
     */
    public function doctor_view()
    {
        return view('doctor.add_doctor');
    }

    public function doctor_create(Request $request)
    {
        $doctor = new Doctor;

        $doctor->department_id = $request->department_id;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->fee = $request->fee;

        $doctor->save();
        return redirect()->back()->with('message','Data Added Successfully');
    }

    /**
     * doctor list
     */

    public function doctor_list()
     {
        $doctor = Doctor::all();
       // $doctor = Doctor::orderBy('id','desc')->all();
        return view('doctor.list',compact('doctor'));
     }

     /**
      * doctor delete
      */

    public function doctor_delete($id)
      {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back();
      }

      /**
       * doctor update
       */

    public function doctor_update(Request $request,$id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.update',compact('doctor'));
    }

    public function doctor_update_post(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->department_id = $request->department_id;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->fee = $request->fee;

        $doctor->save();
        return redirect()->back();
    }
}
