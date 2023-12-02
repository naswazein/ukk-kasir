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
            <th scope="col" class="table-danger">Nama Produk</th>
            <th scope="col" class="table-danger">Harga</th>
            <th scope="col" class="table-danger">Stok</th>
            <th scope="col" class="table-danger">Opsi</th>
        </tr>
      </thead>
      @foreach($produk as $produk)
        <tbody>
        <tr>
            <td class="table-info">{{$produk->NamaProduk}}</td>
            <td class="table-info">{{$produk->Harga}}</td>
            <td class="table-info">{{$produk->Stok}}</td>

        <td>
            <a type="button"class="btn btn-danger" href={{url("/delete/$produk->ProdukID")}}>Delete</a>
            <a type="button"class="btn btn-succes" href={{url("/tambah/$produk->ProdukID")}}>Tambah</a>
            {{-- <a type="button"class="btn btn-succes" href={{url("/delete/$produk->ProdukID")}}>Update</a> --}}
            </td
            </form>
          </td>
        </tbody>
      @endforeach
    </table>
  </div>
</body>
</html>
