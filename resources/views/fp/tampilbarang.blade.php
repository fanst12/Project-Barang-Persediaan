@extends('layout.admin')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Permintaan Barang</title>
  </head>
  <body>
    <br>
    <h1 class="text-center mb-3 mt-5">Tambah Form Permintaan Barang</h1>

        <div class="container">

            <div class="row justify-content-center">
              <div class="col-8">
              <div class="card">
                <div class="card-body">
                  <form action="/fp/editfp/{{$datas->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                      <label for="exampleInputEmail1" class="form-label">Nomor Surat</label>
                      <input type="text" class="form-control" id="no_surat" name="no_surat" aria-describedby="emailHelp"
                      value="{{$datas->no_surat}}">
                    </div>

                    <div class="mb-2">
                      <label for="validationCustom01" class="form-label">Fungsi</label>
                      <select class="custom-select rounded-0" name="id_kf" aria-label="Default select example" required>
                        <option selected disabled value="">Pilih Kegiatan ...</option>
                        @foreach($datafungsi as $data)
                        <option value="{{$data->id_kf}}">{{$data->fungsi}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="mb-2">
                      <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp"
                      value="{{$datas->tanggal}}">
                    </div>
                    
                    <div class="mb-2">
                      <label for="validationCustom01" class="form-label">Barang</label>
                      <select class="custom-select rounded-0" name="id_kf" aria-label="Default select example" required>
                        <option selected disabled value="">Pilih barang ...</option>
                        @foreach($databarang as $dt)
                        <option value="{{$dt->id}}">{{$dt->nama_barang}}</option>
                        @endforeach
                      </select>
                    </div>

                    {{-- <div class="mb-2">
                      <label for="exampleInputEmail1" class="form-label">Barang</label>
                      <input type="number" class="form-control" id="id_bp" name="id_bp" aria-describedby="emailHelp"
                      value="{{$datas->id_bp}}">
                    </div> --}}

                    <div class="mb-2">
                      <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                      <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp"
                      value="{{$datas->jumlah}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
        </div>
  </body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        &nbsp&nbsp&nbsp&nbsp<a href='/fp/fpindex'><button type="submit" class="btn btn-danger">back</button>
      </a>
      </div>
    </div>
  </div>
</html>
@endsection