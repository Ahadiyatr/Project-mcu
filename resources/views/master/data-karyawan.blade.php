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
        <a href="{{ url('/tambahjabatan') }}" class="btn btn-primary">Tambah Data Karyawan</a>
    </div>
    {{-- ./ Header Page--}}

    {{-- Section Body --}}
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Basic DataTables</h4>
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
                        <td scope="row"> {{ $no++ }}</td>
                        <td scope="row"> {{$karyawan->nik_karyawan}} </td>
                        <td scope="row"> {{$karyawan->nama_karyawan}} </td>
                        <td scope="row"> {{$karyawan->perusahaan_id}} </td>
                        <td scope="row"> {{$karyawan->departemen_id}} </td>
                        <td scope="row"> {{$karyawan->jabatan_id}} </td>
                        <td scope="row"> {{$karyawan->tanggal_lhr}} </td>
                        <td scope="row"> {{$karyawan->jenis_kelamin}} </td>
                        <td><a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
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
