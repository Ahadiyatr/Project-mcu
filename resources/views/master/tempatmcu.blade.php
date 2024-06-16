@extends('layouts.app')

@section('title','Tempat-MCU')

@section('content')

{{-- Main Content --}}
<section class="section">
    {{-- Header Page --}}
    <div class="section-header">
        <h1>Data Tempat MCU</h1>
    </div>
    {{-- ./ Header Page--}}

    {{-- Section Body --}}
    <div class="section-body">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="buttons">
                <a href="{{ url('/tambahtempat') }}" class="btn btn-primary">Tambah Data Tempat MCU</a>
            </div>
            <div class="card">
                {{-- @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message}}
                    </div>
                @endif --}}
              <div class="card-header">
                <h4>Tabel Data MCU</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-md">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Tempat MCU</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($tmptmcu as $tmcu)
                            <tr>
                            <td scope="row"> {{ $no++ }} </td>
                            <td> {{ $tmcu->tempat}} </td>
                            <td>
                                <a href="#" class="btn btn-secondary">Detail</a>
                                <a href="/show-tempat/{{ $tmcu->id }}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                <a href="/delete-tempat/{{ $tmcu->id }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
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
