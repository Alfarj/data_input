@extends('layout.main')

@section('container')
    <h1>daftar</h1>
    <table class="table table-dark table-striped">
            <tr>
              <th scope="col">#</th>
              <th scope="col">NAMA</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">JENIS KELAMIN</th>
              <th scope="col">PILIH</th>
            </tr>
            @foreach ($datas as $key=>$value)
            
            <tr>
              <th scope="row">1</th>
              <td>{{ $value->nama }}</td>
              <td>{{ $value->alamat }}</td>
              <td>{{ $value->jenis_kelamin }}</td>
              <td>
                <button type="button" class="btn btn-success">EDIT</button>
                <button type="button" class="btn btn-danger">HAPUS</button>
              </td>
            </tr>
                
            @endforeach
      </table>
@endsection