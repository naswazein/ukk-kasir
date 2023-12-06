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
    <form action="" method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf
      <div class="container">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Name" name="nama_pelanggan">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter The Adress" name="alamat">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">No Telp</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number" name="no_telp">
      </div>
      <div class="d-grid gap-2 col-4 mx-auto">
        <br>
      <button class="btn btn-info" type="submit">Send</button>
      </div>
    </form>
</body>
</html>
