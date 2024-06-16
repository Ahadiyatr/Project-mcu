@extends('layouts.app')

@section('title','Pengguna')

@section('content')

{{-- Main Content --}}
<section class="section">
    {{-- Header Page --}}
    <div class="section-header">
        <h1>Data MCU</h1>
    </div>
    <div class="buttons">
        <a href="/create-mcu" class="btn btn-primary">Tambah Data Karyawan</a>
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
                      <th>No MCU</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Perusahaan</th>
                      <th>Departemen</th>
                      <th>Jabatan</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal MCU</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $mcu)
                    <tr>
                        <td scope="row"> {{ $no++ }}</td>
                        <td scope='row'> {{ $mcu->no_mcu }} </td>
                        <td scope='row'> {{ $mcu->nama_karyawan }}</td>
                        <td scope='row'> {{ $mcu->dt_karyawan_id }}</td>
                        <td scope='row'> {{ $mcu->perusahaan }}</td>
                        <td scope='row'> {{ $mcu->departemen->departemen }}</td>
                        <td scope='row'> {{ $mcu->jabatan->jabatan }}</td>
                        <td scope='row'> {{ $mcu->jenis_kelamin }}</td>
                        <td scope='row'> {{ $mcu->tanggal_mcu }}</td>
                        <td><div class="badge badge-success">FIT TO WORK</div></td>
                        <td>
                            <a href="/detail-mcu/{{ $mcu->id }}" class="btn btn-secondary">Detail</a>
                            <a href="/show-mcu/{{ $mcu->id}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
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
