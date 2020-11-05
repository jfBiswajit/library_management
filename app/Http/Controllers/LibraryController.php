<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
  public function index()
  {
    return view('dashboard');
  }

  public function createStudent(Request $req)
  {
    if ($req->ajax()) {
      $student = new Student();
      $student->fname = $req->fname;
      $student->lname = $req->lname;
      $student->student_id = $req->studentId;
      $student->address = $req->address;
      $student->valid_from = $req->validFrom;
      $student->valid_to = $req->validTo;

      $student->save();

      return response()->json(['success' => true]);
    }

    return view('create_student');
  }
}
