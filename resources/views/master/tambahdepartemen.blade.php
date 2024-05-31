@extends('layouts.app')

@section('title','Tambah-Departemen')

@section('content')

{{-- Main Content --}}

    <section class="section">
      <div class="section-header">
        <h1>Tambah Departemen</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Departemen</a></div>
          <div class="breadcrumb-item">Tambah Departemen</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Form Validation</h2>
        <p class="section-lead">
          Form validation using default from Bootstrap 4
        </p>

        <div class="row justify-content-center">
          <div class="col-7">
            <div class="card">
              <form action="/insertdepartemen" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Default Validation</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Departemen</label>
                    <input type="text" name='departemen' class="form-control" required="">
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
