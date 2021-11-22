@extends('layout.main')

@section('container')
<h1>INPUT DATA</h1>
<form action="{{ url('input')}}" method="post">
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">NAMA</span>
  <input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP">
</div>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">ALAMAT</span>
  <input type="text" name="alamat" class="form-control" placeholder="ALAMAT LENGKAP">
</div>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">JENIS KELAMIN</span>
  <select class="form-select" aria-label="Default select example">
    <option selected>PILIH</option>
    <option value="1">PRIA</option>
    <option value="2">WANITA</option>
  </select>
</div>
</form>
@endsection