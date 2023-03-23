<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     *  display department
     */
    public function department_view()
    {
        $data = Department::all();
        return view('dept.department',compact('data'));
    }

    /**
     * create department
     */
    public function department_add(Request $request)
    {
        $data =new Department;
        $data->name = $request->name;
        $data->save();
        return redirect()->back();
    }


    /**
     * delete department
     */
    public function department_delete($id)
    {
        $data = Department::find($id);
        $data->delete();
        return redirect()->back();
    }

    /**
     * update department
     */

    public function department_update($id){
        $data = Department::find($id);
       return view('dept.department_update',compact('data'));
    }

    public function department_update_post(Request $request,$id)
    {
        $data = Department::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->back();
    }
}
