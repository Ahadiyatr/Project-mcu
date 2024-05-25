@extends('layouts.app')

@section('title', 'Hasil Input')

@section('content')

{{-- Main Content --}}
<section class="section">
    <div class="section-header">
        <h1>Review Hasil</h1>
    </div>

    {{-- Section Body --}}
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">

                {{-- card --}}
                <div class="card">
                <div class="card-header">
                  <h4>Data Karyawan</h4>
                </div>
                {{-- card body --}}
                <div class="card-body">
                  This is some text within a card body.
                    <div class="form-group row">
                        <label>Kode MCU</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>NIK</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>NIK</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Nama</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Perusahaan</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Departemen</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Jabatan</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Umur</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Jenis Kelamin</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Tempat MCU</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Tanggal MCU</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>

                    {{-- Pemeriksaan Umum --}}
                    <div class="card-header">
                        <h6>Pemeriksaan Umum</h6>
                      </div>

                    <div class="form-group row">
                        <label>Sistole</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Diastole</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Nadi</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Tinggi Badan</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Berat Badan</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>BMI</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    {{-- Pemeriksaan Lab --}}
                    <div class="form-group row">
                        <label>Hemoglobin</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Colestrol</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Trigliserida</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Gula Darah Puasa</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Asam Urat </label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Ur</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Creatinin</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>SGOT</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>SGPT</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Abnormal Lab</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>HbsAg</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>AntiHbs</label>
                        <div class="col-sm-8">
                            :
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Urin</label>
                        <div class="col-sm-8">
                            : - (Temuan)
                        </div>
                    </div>


                </div>
                {{-- ./card body --}}
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              {{-- ./Card --}}
        </div>
        {{-- ./ Section Body --}}
    </div>
</section>
{{-- ./content --}}


@endsection
