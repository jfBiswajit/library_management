@include('include.header')
<form id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive;" class="p-4 bg-danger text-white text-center">Borrow a Book
  </h3>
  <div class="form-group">
    <label for="student">Select Student</label>
    <select required class="form-control" id="student">
      <option></option>
      @foreach ($students as $student)
      <option value="{{ $student->id }}">{{ $student->fname }} {{ $student->lname }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="book">Select Book</label>
    <select class="form-control" id="book">
      <option></option>
      @foreach ($books as $book)
      <option value="{{ $book->id }}">{{ $book->title }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="return_date">Return Date</label>
      <input required type="date" class="form-control" id="return_date">
    </div>
  </div>
  <button type="submit" class="mt-5 btn btn-block btn-danger btn-lg">Borrow</button>
</form>
@include('include.footer')

<script>
  $('#create_student').submit(function (e) {
    e.preventDefault();

    const student = $('#student');
    const book = $('#book');
    const returnDate = $('#return_date');

    $.ajax({
      url: 'borrow_book',
      method: 'POST',
      data: {
        _token: "{{ csrf_token() }}",
        student: student.val(),
        book: book.val(),
        returnDate: returnDate.val(),
      },
      success: function (response) {
        swal("Success!", "", "success");
        $('input').val('');
        $('select').val('');
      },
      dataType: 'json',
    });
  });
</script>
