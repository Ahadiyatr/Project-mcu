@extends('layouts.app')

@section('title','Edit-Jabatan')

@section('content')

{{-- Main Content --}}

    <section class="section">
      <div class="section-header">
        <h1>Edit Jabatan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Jabatan</a></div>
          <div class="breadcrumb-item">Tambah Jabatan</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Form Validation</h2>
        <p class="section-lead">
          Form validation using default from Bootstrap 4
        </p>

        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <form action="/update-jabatan/{{ $jabatan->id}}" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Default Validation</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name='jabatan' class="form-control" required="" value=" {{ $jabatan->jabatan }}">
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
