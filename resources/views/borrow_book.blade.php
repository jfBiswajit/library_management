@include('include.header')
<form id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive;" class="p-4 bg-danger text-white text-center">Borrow a Book
  </h3>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Student</label>
    <select required class="form-control" id="exampleFormControlSelect1">
      <option></option>
      @foreach ($students as $student)
          <option value="{{ $student->id }}">{{ $student->fname }} {{ $student->lname }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Book</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option></option>
      @foreach ($books as $book)
      <option value="{{ $book->id }}">{{ $book->title }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="valid_from">Return Date</label>
      <input required type="date" class="form-control" id="price">
    </div>
  </div>
  <button type="submit" class="mt-5 btn btn-block btn-danger btn-lg">Borrow</button>
</form>
@include('include.footer')

<script>
  $('#create_student').submit(function (e) {
    e.preventDefault();

    const title = $('#title');
    const author = $('#author');
    const isbn = $('#isbn');
    const price = $('#price');
    const totalCopy = $('#total_copy');

    $.ajax({
      url: 'create_book',
      method: 'POST',
      data: {
        _token: "{{ csrf_token() }}",
        title: title.val(),
        author: author.val(),
        isbn: isbn.val(),
        price: price.val(),
        total_copy: totalCopy.val(),
      },
      success: function (response) {
        swal("Success!", "New book added!", "success");
        $('input').val('');
      },
      dataType: 'json',
    });
  });
</script>
