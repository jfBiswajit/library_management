@include('include.header')
<form id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive;" class="p-4 bg-info text-white text-center">Add New Book
  </h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">Title</label>
      <input required type="text" class="form-control" id="fname" placeholder="Book Title">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Author Name</label>
      <input required type="text" class="form-control" id="lname" placeholder="Author Name">
    </div>
  </div>
  <div class="form-group">
    <label for="student_id">ISBN</label>
    <input required type="number" class="form-control" id="student_id" placeholder="XXX-XXX-XXX">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="valid_from">Price</label>
      <input required type="number" class="form-control" id="valid_from">
    </div>
    <div class="form-group col-md-6">
      <label for="valid_to">Total Copy</label>
      <input required type="number" class="form-control" id="valid_to">
    </div>
  </div>
  <button type="submit" class="mt-5 btn btn-block btn-info btn-lg">Add Book</button>
</form>
@include('include.footer')

<script>
  $('#create_student').submit(function (e) {
    e.preventDefault();
    const fname = $('#fname');
    const lname = $('#lname');
    const studentId = $('#student_id');
    const address = $('#address');
    const validFrom = $('#valid_from');
    const validTo = $('#valid_to');
    console.log(validFrom.val());
    console.log(validTo.val());
    $.ajax({
      url: 'create_student',
      method: 'POST',
      data: {
        _token: "{{ csrf_token() }}",
        fname: fname.val(),
        lname: lname.val(),
        studentId: studentId.val(),
        address: address.val(),
        validFrom: validFrom.val(),
        validTo: validTo.val(),
      },
      success: function (response) {
        swal("Success!", "New student added!", "success");
        $('input').val('');
      },
      dataType: 'json',
    });
  });
</script>
