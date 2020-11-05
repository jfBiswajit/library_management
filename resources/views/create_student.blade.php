@include('include.header')
<form id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive;" class="p-4 bg-success text-white text-center">Crete New Student</h3>
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
    <label for="id">Student ID</label>
    <input required type="text" class="form-control" id="id" placeholder="XXX-XXX-XXX">
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
  <button type="submit" class="mt-5 btn btn-block btn-success btn-lg">Create Student</button>
</form>
@include('include.footer')
