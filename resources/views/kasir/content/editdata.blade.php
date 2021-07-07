@extends('kasir.template')

@section('title', 'Edit Data')

@section('content')

@include('sweetalert::alert')

<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Edit  Data Barang</h1>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Form Edit Data Barang</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.updatedata', $data)}}" method="POST" class="form-horizontal">
                    @csrf
                    @method("PATCH")
                    <div class="card-body">
                        <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" value="{{$data->nama }}{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Barang" required>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text"  name="harga" value="{{$data->harga}} {{ old('harga') }}" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga" required>
                            @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        <a onclick="history.back();" class="btn btn-danger float-right">Cancel</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection