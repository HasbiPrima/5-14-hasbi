@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-boid">Contact Us</h2>
</div>
<form>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama">
    <label for="inputname">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control"id="inputname" placeholder="Email">
    <label for="inputname" class="form-label">Email</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan oesan disini!" id="floatingTextarea2" style="height: 150px"></textarea>
    <label for="floatingTextarea2">Pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection