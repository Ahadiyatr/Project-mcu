@extends('layouts.app')

@section('title','Edit-Karyawan')

@section('content')

{{-- Main Content --}}

    <section class="section">
      <div class="section-header">
        <h1>Tambah Data Karyawan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Data Karyawan</a></div>
          <div class="breadcrumb-item">Edit Data Karyawan</div>
        </div>
      </div>

      <div class="section-body">
        <div class="row justify-content-center">
          <div class="col-7">
            <div class="card">
              <form action="/update-karyawan/{{ $karyawan->id}}" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Edit Data Karyawan Baru</h4>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>NIK Karyawan</label>
                        <input type="number" name='nik' class="form-control" required="" value="{{ $karyawan->nik }}">
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" name='nama' class="form-control" required="" value="{{ $karyawan->nama }}">
                    </div>
                    <div class="form-group">
                        <label>Perusahaan</label>
                        <select class="form-control select2" name="perusahaan_id" id="perusahaan_id">
                            <option disabled value=""> - Pilih Perusahaan - </option>
                            <option value="{{ $karyawan->perusahaan_id }}">{{$karyawan->perusahaan->perusahaan}}</option>

                            @foreach ($perusahaan as $pt)
                            <option value="{{ $pt->id }}"> {{ $pt->perusahaan}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Departemen</label>
                        <select name="departemen_id" id="departemen_id" class="form-control select2">
                            <option disabled value> - Pilih Departemen - </option>
                            <option value="{{ $karyawan->departemen_id }}">{{$karyawan->departemen->departemen}}</option>
                            @foreach ($departemen as $dept)
                            <option value="{{ $dept->id}}"> {{ $dept->departemen}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select name="jabatan_id" id="jabatan_id" class="form-control select2">
                            <option disabled value> - Pilih - </option>
                            <option value="{{ $karyawan->jabatan_id }}">{{$karyawan->jabatan->jabatan}}</option>
                            @foreach ($jabatan as $jab)
                            <option value="{{ $jab->id}}"> {{ $jab->jabatan}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Jenis Kelamin</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin">
                            <label class="form-check-label" for="Laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin">
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control datepicker" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}">
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
