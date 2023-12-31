<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;

class SchoolSubjectController extends Controller
{
    //
    public function ViewSchoolSubject(){
        $data['allData'] = SchoolSubject::all();
        return view('backend.setup.school_subject.view_school_subject',  $data);
    }
    public function SchoolSubjectAdd(){
        
        return view('backend.setup.school_subject.add_school_subject');
    }

    public function SchoolSubjectStore(Request $request){
       
        $validateData = $request->validate([        
            'name' => 'required|unique:school_subjects,name',
          ]);

        $data = new SchoolSubject();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'School Subject Inserted Successfully!',
          );
      
          return redirect()->route('school.subject.view')->with($notification);
    }

    public function SchoolSubjectEdit($id){
        $editData = SchoolSubject::find($id);
       
        return view('backend.setup.school_subject.edit_school_subject', compact('editData'));
    }

    public function SchoolSubjectUpdate(Request $request,$id){

        $data = SchoolSubject::find($id);
        $validateData = $request->validate([        
            'name' => 'required|unique:school_subjects,name,'.$data->id
          ]);

       
       
        $data->name =$request->name;

        $data->save();
  
        $notification = array(
          'alert-type' => 'info',
          'message' => 'School Subject Updated Successfully!',
        );
    
        return redirect()->route('school.subject.view')->with($notification);
       
        
    }

    public function SchoolSubjectDelete($id){
        $user = SchoolSubject::find($id);
        $user->delete();

        $notification = array(
            'alert-type' => 'info',
            'message' => 'School Subject Deleted Successfully!',
          );
      
          return redirect()->route('school.subject.view')->with($notification);
    }
}
