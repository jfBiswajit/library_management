<?php

namespace App\Http\Controllers;

use App\Book;
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
      $book = new Book();
      $book->title = $req->title;
      $book->author = $req->author;
      $book->isbn = $req->isbn;
      $book->price = $req->price;
      $book->available_copy = $req->total_copy;

      $book->save();

      return response()->json(['success' => true]);
    }

    return view('create_student');
  }

  public function createBook(Request $req)
  {
    if ($req->ajax()) {
      $student = new Book();
      $student->fname = $req->fname;
      $student->lname = $req->lname;
      $student->student_id = $req->studentId;
      $student->address = $req->address;
      $student->valid_from = $req->validFrom;
      $student->valid_to = $req->validTo;

      $student->save();

      return response()->json(['success' => true]);
    }

    return view('create_book');
  }
}
