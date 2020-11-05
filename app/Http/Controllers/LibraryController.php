<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
  public function index () {
    return view('dashboard');
  }

  public function createStudent(Request $req) {
    if ($req->ajax()) {
      return response()->json($req->all());
    }
    return view('create_student');
  }
}
