<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <center>
                <h1>Detail Penjualan</h1>
            </center>
            <table style="margin-top: 2rem;" class="table">
                <thead>
                    <tr>
                        <th scope="col" class="table-warning">Tanggal</th>
                        <th scope="col" class="table-warning">Pelanggan</th>
                        <th scope="col" class="table-warning">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-secondary">{{$penjualan->TanggalPenjualan}}</td>
                        <td class="table-secondary">{{$penjualan->PelangganID}}</td>
                        <td class="table-secondary">{{$penjualan->TotalHarga}}</td>
                    </tr>
                            {{-- <div class="mb-3">
                                @method('post')
                                @csrf
                                @auth('petugas')
                                    <input type="text" hidden value="{{ $pengaduan->id_pengaduan }}" name="id_pengaduan">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_tanggapan" rows="3"></textarea>
                                @endauth
                                <input class="btn btn-primary" type="submit" value="Tanggapi">
                            </div> --}}
                        </td>
                </tbody>
            </table>
        </div>
    </form>
</body>
    {{-- <h2>Tanggapan</h2> --}}
    {{-- <div class="media border p-3">
        @foreach ($tanggapan as $tanggapan)
            <div class="media-body">
                <h4>Petugas<small>|<i>{{ $tanggapan->nama_petugas }}</i></small></h4>
                <p>{{ $tanggapan->tanggapan }}</p>
            </div>
        @endforeach
    </div> --}}
    {{-- </div> --}}


</html>
