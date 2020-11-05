@include('include.header')
<div id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive; background: #f6830f" class="p-4 text-white text-center mb-4">
    Borrowed Books
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
      @foreach ($borrowedBookList as $item)
        <tr>
          <td>{{ $item['borrowed_by'] }}</td>
          <td>{{ $item['book_title'] }}</td>
          <td>{{ $item['borrowed_date'] }}</td>
          <td>{{ $item['return_date'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@include('include.footer')
<script>
  $(document).ready(function () {
    $('#table').DataTable();
  });
</script>
