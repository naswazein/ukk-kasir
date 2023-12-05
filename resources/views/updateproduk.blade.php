<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Update Produk</title>
</head>
<body>
    <form action={{ url("/updateproduk/$produk->ProdukID") }} method="POST" enctype="multipart/form-data"
        @method('POST')
        @csrf
        <div class="container">
            <br>
            <br>
            <center>
                <td>
                    <h2>update Produk</h2>
                </td>
            </center>
            <div class="mb-3">
            </div>
            <label for="exampleFormControlTextarea1" class="form-label">Nama Produk</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="NamaProduk" required>{{ $produk->NamaProduk }}</textarea>
            @error('NamaProduk')
                <div>{{ $message }}</div>
            @enderror
            <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Harga" required>{{ $produk->Harga }}</textarea>
            @error('Harga')
                <div>{{ $message }}</div>
            @enderror
            <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="stok" required>{{ $produk->Stok }}</textarea>
            @error('stok')
                <div>{{ $message }}</div>
            @enderror

            <br>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
    </form>
</body>

</html>
