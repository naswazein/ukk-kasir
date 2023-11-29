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
        <tr>
            <th scope="col">produk id</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
        </tr>
      </thead>
      @foreach($pengaduan as $data)
        <tbody>
        <tr>
            <td class="table-success">ProdukID</td>
            <td class="table-danger">NamaProduk</td>
            <td class="table-warning">Harga</td>
            <td class="table-info">Stok</td>
        </tr>
        <td>
            <a href={{url("/hapus-pengaduan/$data->id_pengaduan")}}>Delete</a>
            <a href={{url("/detail-pengaduan/$data->id_pengaduan")}}">Detail</a>
            <a href={{url("/update/$data->id_pengaduan")}}">Update</a>
            </td
            </form>
          </td>
        </tbody>
      @endforeach
    </table>
  </div>
</body>
</html>
