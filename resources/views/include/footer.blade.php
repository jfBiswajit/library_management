<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
</body>

</html>
