@extends('layouts.app')

@section('title','Departemen')

@section('content')

{{-- Main Content --}}
<section class="section">
    {{-- Header Page --}}
    <div class="section-header">
        <h1>Data Departemen</h1>
    </div>
    {{-- ./ Header Page--}}

    {{-- Section Body --}}
    <div class="section-body">

        <div class="row justify-content-center">
          <div class="col-8">
            <div class="buttons">
                <a href="{{ url('/tambahdepartemen') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message}}
                    </div>
                @endif
              <div class="card-header">
                <h4>Tabel Departemen</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-md">
                    <tr>
                      <th>No</th>
                      <th>Nama Departemen</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($departemen as $dept)
                        <tr>
                          <td scope="row"> {{ $no++ }} </td>
                          <td> {{ $dept->departemen }} </td>
                          <td>
                            <a href="/show-departemen/{{ $dept->id }}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                            <a href="/delete-departemen/{{ $dept->id }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
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
