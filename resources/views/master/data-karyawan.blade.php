@extends('layouts.app')

@section('title','Jabatan')

@section('content')

{{-- Main Content --}}
<section class="section">
    {{-- Header Page --}}
    <div class="section-header">
        <h1>Data Karyawan</h1>
    </div>
    <div class="buttons">
        <a href="{{ url('/tambah-karyawan') }}" class="btn btn-primary">Tambah Data Karyawan</a>
    </div>
    {{-- ./ Header Page--}}

    {{-- Section Body --}}
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Karyawan</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        NO
                      </th>
                      <th>NIK Karyawan</th>
                      <th>Nama</th>
                      <th>Perusahaan</th>
                      <th>Departemen</th>
                      <th>Jabatan</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($dt_karyawan as $karyawan)
                    <tr>
                        <td scope="row" class="text-center"> {{ $no++ }}</td>
                        <td scope="row"> {{$karyawan->nik_karyawan}} </td>
                        <td scope="row"> {{$karyawan->nama_karyawan}} </td>
                        <td scope="row"> {{$karyawan->perusahaan->perusahaan}} </td>
                        <td scope="row"> {{$karyawan->departemen->departemen}} </td>
                        <td scope="row"> {{$karyawan->jabatan->jabatan}} </td>
                        <td scope="row"> {{$karyawan->tanggal_lhr}} </td>
                        <td scope="row"> {{$karyawan->jenis_kelamin}} </td>
                        <td>
                            <a href="/show-karyawan/{{ $karyawan->id }}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                            <a href="/delete-karyawan/{{ $karyawan->id }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    {{-- ./ Section Body --}}

</section>
{{-- ./content --}}

@endsection

@section('sidebar')
@parent

@endsection
