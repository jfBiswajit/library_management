<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

  public function createBook(Request $req)
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

    return view('add_book');
  }

  public function borrowBook(Request $req)
  {
    if ($req->ajax()) {
      $borrow = new Borrow();
      $borrow->borrowed_by = $req->student;
      $borrow->book = $req->book;
      $borrow->is_returned = 0;
      $borrow->return_date = $req->returnDate;

      $borrow->save();

      return response()->json(['success' => true]);
    }

    $students = DB::table('students')->get();
    $books = DB::table('books')->get();

    return view('borrow_book', compact('students', 'books'));
  }

  public function status() {
    return view('status');
  }
}
