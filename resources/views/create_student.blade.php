@include('include.header')
<form id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive;" class="p-4 bg-info text-white text-center">Crete New Student
  </h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input required type="text" class="form-control" id="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input required type="text" class="form-control" id="lname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label for="student_id">Student ID</label>
    <input required type="number" class="form-control" id="student_id" placeholder="XXX-XXX-XXX">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input required type="text" class="form-control" id="address" placeholder="4952  Scott Street">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="valid_from">Valid From</label>
      <input required type="date" class="form-control" id="valid_from">
    </div>
    <div class="form-group col-md-6">
      <label for="valid_to">Valid To</label>
      <input required type="date" class="form-control" id="valid_to">
    </div>
  </div>
  <button type="submit" class="mt-5 btn btn-block btn-info btn-lg">Create Student</button>
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
