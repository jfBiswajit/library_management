@include('include.header')
<div id="create_student" class="w-50 mx-auto pt-5">
  <h3 style="font-family: 'Kaushan Script', cursive; background: #563D7C" class="p-4 text-white text-center">Dashboard
  </h3>
  <div class="row justify-content-between" style="margin-right: 0; margin-left: 0">
    <a href="{{ url('add_book') }}" class="col-3 bg-success text-white"
      style="height: 80px; text-decoration: none; cursor: pointer">
      <p style="margin-top: 18%; text-align: center;  font-size: 1.2rem">ADD BOOK <span
          style="display: inline-block; width: 30px; height: 30px; border-radius: 50%; background: white; text-align: center; font-weight: bold; margin-left: -3px"><span
            class="text-success">{{ $totalBooks }}</span></span>
      </p>
    </a>
    <a href="{{ url('create_student') }}" class="col-3 bg-info text-white"
      style="height: 80px; text-decoration: none; cursor: pointer">
      <p style="margin-top: 18%; text-align: center;  font-size: 1.2rem">ADD USER <span
          style="display: inline-block; width: 30px; height: 30px; border-radius: 50%; background: white; text-align: center; font-weight: bold; margin-left: -3px"><span
            class="text-info">{{ $totalUsers }}</span></span>
      </p>
    </a>
    <a href="{{ url('borrow_book') }}" class="col-3 bg-danger text-white"
      style="height: 80px; text-decoration: none; cursor: pointer">
      <p style="margin-top: 18%; text-align: center;  font-size: 1.2rem">BORROW
      </p>
    </a>
    <a href="{{ url('status') }}" class="col-3 text-white"
      style="height: 80px; text-decoration: none; cursor: pointer; background: #f6830f">
      <p style="margin-top: 18%; text-align: center;  font-size: 1.2rem">STATUS <span
          style="display: inline-block; width: 30px; height: 30px; border-radius: 50%; background: white; text-align:
          center; font-weight: bold; margin-left: -3px"><span style="color: #f6830f">{{ $status }}</span></span>
      </p>
    </a>
  </div>
</div>
@include('include.footer')
