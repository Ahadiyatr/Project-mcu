@extends('layouts.app')

@section('title','Perusahaan')

@section('content')

{{-- Main Content --}}
<section class="section">
    {{-- Header Page --}}
    <div class="section-header">
        <h1>Data Perusahaan</h1>
    </div>
    {{-- ./ Header Page--}}

    {{-- Section Body --}}
    <div class="section-body">
        <h2 class="section-title">Table</h2>
        <p class="section-lead">Example of some Bootstrap table components.</p>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-md">
                    <tr>
                      <th>No</th>
                      <th>Nama Perusahaan</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Irwansyah Saputra</td>
                      <td>
                        <a href="#" class="btn btn-secondary">Detail</a>
                        <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                    </td>
                    </tr>
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
