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
            @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
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
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Perusahaan</th>
                      <th>Departemen</th>
                      <th>Jabatan</th>
                      <th>Umur</th>
                      <th>L/P</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    {{-- <pre>{{ print_r($karyawan->toArray(), true) }}</pre> --}}
                    @foreach ($karyawan as $kar)
                    <tr>
                        <td scope="row" class="text-center"> {{ $no++ }}</td>
                        <td scope="row"> {{$kar->nik}} </td>
                        <td scope="row"> {{$kar->nama}} </td>
                        <td scope="row"> {{$kar->perusahaan->perusahaan}} </td>
                        <td scope="row"> {{$kar->departemen->departemen}} </td>
                        <td scope="row"> {{$kar->jabatan->jabatan}} </td>
                        <td scope="row"> {{$kar->age}} </td>
                        <td scope="row"> {{$kar->jenis_kelamin}} </td>
                        <td>
                            <a href="/show-karyawan/{{ $kar->id }}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                            <a href="#" class="btn btn-icon btn-danger delete"><i class="fas fa-times" data-id="{{ $kar->id }}" ></i></a>
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

<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.delete').click ( function(){
        var karyawanid = $(this).attr('data-id');
        console.log(karyawanid);
        Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this! = "+ karyawanid +" ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire({
                  title: "Deleted!",
                  text: "Your file has been deleted.",
                  icon: "success"
                });
              }
            });
    });
</script>

@endsection

@section('sidebar')
@parent

@endsection
