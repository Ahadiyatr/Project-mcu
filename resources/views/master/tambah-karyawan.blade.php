@extends('layouts.app')

@section('title','Tambah-Karyawan')

@section('content')

{{-- Main Content --}}

    <section class="section">
      <div class="section-header">
        <h1>Tambah Data Karyawan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Data Karyawan</a></div>
          <div class="breadcrumb-item">Tambah Data Karyawan</div>
        </div>
      </div>

      <div class="section-body">
        <div class="row justify-content-center">
          <div class="col-7">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <form action="/insert-karyawan" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Masukkan Data Karyawan Baru</h4>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>NIK Karyawan</label>
                        <input type="number" name='nik' class="form-control" required="" onkeyup="limit(8);">
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" name='nama' class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Perusahaan</label>
                        <select name="perusahaan_id" id="perusahaan_id" class="form-control select2">
                            <option value=""> - Pilih - </option>
                            @foreach ($perusahaan as $pt)
                            <option value="{{ $pt->id}}"> {{ $pt->perusahaan}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Departemen</label>
                        <select name="departemen_id" id="departemen_id" class="form-control select2">
                            <option value=""> - Pilih - </option>
                            @foreach ($departemen as $dept)
                            <option value="{{ $dept->id}}"> {{ $dept->departemen}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan_id" id="jabatan_id" class="form-control select2">
                            <option value=""> - Pilih - </option>
                            @foreach ($jabatan as $jab)
                            <option value="{{ $jab->id}}"> {{ $jab->jabatan}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Jenis Kelamin</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin">
                            <label class="form-check-label" for="Laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin">
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control datepicker" name="tanggal_lahir">
                    </div>
                </div>

                <div class="card-footer text-right">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>
{{-- ./content --}}

@endsection

@section('sidebar')
@parent

@endsection
