@include('include.header')
<form id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive;" class="p-4 bg-success text-white text-center">Add New Book
  </h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">Title</label>
      <input required type="text" class="form-control" id="title" placeholder="Book Title">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Author Name</label>
      <input required type="text" class="form-control" id="author" placeholder="Author Name">
    </div>
  </div>
  <div class="form-group">
    <label for="student_id">ISBN</label>
    <input required type="number" class="form-control" id="isbn" placeholder="XXX-XXX-XXX">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="valid_from">Price</label>
      <input required type="number" class="form-control" id="price">
    </div>
    <div class="form-group col-md-6">
      <label for="valid_to">Total Copy</label>
      <input required type="number" class="form-control" id="total_copy">
    </div>
  </div>
  <button type="submit" class="mt-5 btn btn-block btn-success btn-lg">Add Book</button>
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
      url: 'add_book',
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
