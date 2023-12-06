<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @include('layouts.navbar')
    <div class="container">
    <table class="table">
      <thead>
        <br>
        <tr>
            <th scope="col" class="table-danger">Nama</th>
            <th scope="col" class="table-danger">Alamat</th>
            <th scope="col" class="table-danger">No Telp</th>
            <th scope="col" class="table-danger">Opsi</th>
        </tr>
      </thead>
      @foreach($pelanggan as $pelanggan)
        <tbody>
        <tr>
            <td class="">{{$pelanggan->NamaPelanggan}}</td>
            <td class="">{{$pelanggan->Alamat}}</td>
            <td class="">{{$pelanggan->NomorTelepon}}</td>
          <td>
            <a type="button"class="btn btn-danger" href={{url("/pelanggan/delete/$pelanggan->PelangganID")}}>Delete</a>
            <a type="button"class="btn btn-success" href={{url("/updatepelanggan/$pelanggan->PelangganID")}}>Update</a>
          </td
            </form>
          </td>
        </tbody>
      @endforeach
    </table>
    <a type="button"class="btn btn-primary" href={{url("/pelanggan/tambah")}}>Tambah</a>
  </div>
</body>
</html>
