@extends('layouts.app')

@section('title','Tambah-Tempat-MCU')

@section('content')

{{-- Main Content --}}

    <section class="section">
      <div class="section-header">
        <h1>Tambah Tempat MCU</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Tempat MCU</a></div>
          <div class="breadcrumb-item">Tambah Tempat MCU</div>
        </div>
      </div>

      <div class="section-body">
        <div class="row justify-content-center">
          <div class="col-7">
            <div class="card">
              <form action="/insert-tempat" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Default Validation</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tempat MCU</label>
                    <input type="text" name='tempat' class="form-control" required="">
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
