<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function saveData(Request $request)
    {


        $imagePath =  $request->file('userimage')->store('uploads', 'public');

        $student = new student();
        $student['name'] = $request->username;
        $student['email'] = $request->useremail;
        $student['age'] = $request->userage;
        $student['image'] = $imagePath;
        $student->save();

        return redirect('/');
    }

    public function showData()
    {
        $students = student::all();
        return view('welcome', compact('students'));
    }

    public function editform($id)
    {
        $student = student::find($id);
        return view('edit', compact('student'));
    }


    public function updateData(Request $request, $id)
    {
        $student = student::find($id);

        if ($request->file('userimage')) {
            $imagePath =  $request->file('userimage')->store('uploads', 'public');
            $student['image'] = $imagePath;
        }
        $student['name'] = $request->username;
        $student['email'] = $request->useremail;
        $student['age'] = $request->userage;
        $student->save();
        return redirect('/');
    }

    public function deleteData($id)
    {
        $student = student::find($id)->delete();
        return redirect('/');
    }
}
