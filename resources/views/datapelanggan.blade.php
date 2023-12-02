<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$judul}}</h1>
     @include('layouts.navbar')
    <div class="container">
    <table class="table">
      <thead>
        <br>
        <tr>
            <th scope="col" class="table-danger">Nama</th>
            <th scope="col" class="table-danger">Alamat</th>
            <th scope="col" class="table-danger">No Telp</th>
        </tr>
      </thead>
      @foreach($pelanggan as $pelanggan)
        <tbody>
        <tr>
            <td class="table-info">{{$pelanggan->NamaPelanggan}}</td>
            <td class="table-info">{{$pelanggan->Alamat}}</td>
            <td class="table-info">{{$pelanggan->NomorTelepon}}</td>
        </tr>
        {{-- <td>
            <a href={{url("/hapus-pengaduan/$data->id_pengaduan")}}>Delete</a>
            <a href={{url("/detail-pengaduan/$data->id_pengaduan")}}">Detail</a>
            <a href={{url("/update/$data->id_pengaduan")}}">Update</a>
            </td
            </form>
          </td> --}}
        </tbody>
      @endforeach
    </table>
  </div>
</body>
</html>
