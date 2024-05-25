@extends('layouts.app')

@section('title','Jabatan')

@section('content')

{{-- Main Content --}}
<section class="section">
    {{-- Header Page --}}
    <div class="section-header">
        <h1>Data Jabatan</h1>
    </div>
    <div class="buttons">
        <a href="{{ url('/tambahjabatan') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    {{-- ./ Header Page--}}

    {{-- Section Body --}}
    <div class="section-body">
        <h2 class="section-title">Table</h2>
        <p class="section-lead">Example of some Bootstrap table components.</p>

        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message}}
                    </div>
                @endif
              <div class="card-header">
                <h4>Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-md">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Jabatan</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($jabatan as $jab)
                            <tr>
                            <td scope="row"> {{ $no++ }} </td>
                            <td> {{ $jab->jabatan}} </td>
                            <td>
                                <a href="#" class="btn btn-secondary">Detail</a>
                                <a href="/show-jabatan/{{ $jab->id }}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                <a href="/delete-jabatan/{{ $jab->id }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
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
