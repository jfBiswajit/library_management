@include('include.header')
<div id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive; background: #f6830f" class="p-4 text-white text-center mb-4">Borrowed Books
  </h3>
  <table id="table" class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Book</th>
        <th scope="col">Borrowed Date</th>
        <th scope="col">Returned Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mark</td>
        <td>Mar</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <td>Jacob</td>
        <td>Jaco</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
    </tbody>
  </table>
</div>
@include('include.footer')
<script>
  $(document).ready( function () {
  $('#table').DataTable();
  } );
</script>
