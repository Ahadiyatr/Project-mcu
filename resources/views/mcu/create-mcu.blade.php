@extends('layouts.app')

<link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">

@section('title','Input MCU')

@section('content')

{{-- Main Content --}}

    <section class="section">
      <div class="section-header">
        <h1>Input Data MCU PPA</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">MCU</a></div>
          <div class="breadcrumb-item">Input MCU</div>
        </div>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <form action="/insert-mcu" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Data Karyawan</h4>
                </div>

                {{-- card body --}}
                <div class="card-body">
                    <form action="/insert-mcu" method="POST">
                        @csrf
                        {{-- <div class="form-group">
                            <label>No MCU</label>
                            <input type="text" class="form-control is-valid" id="no_mcu" name="no_mcu">
                            <div class="valid-feedback"></div>
                        </div> --}}
                        <div class="form-group">
                            <label>NIK</label>
                            <select name="karyawan_id" id="karyawan_id" class="form-control select2">
                                <option value=""> - Pilih - </option>
                                @foreach ($karyawan as $kar)
                                <option value="{{ $kar->id}}"> {{ $kar->nik}} - {{ $kar->nama}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat MCU</label>
                            <select name="tmptmcu_id" id="tmptmcu_id" class="form-control select2">
                                <option value=""> - Pilih - </option>
                                @foreach ($tmptmcu as $tempat)
                                <option value="{{ $tempat->id}}"> {{ $tempat->tempat}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal MCU</label>
                            <input type="text" class="form-control datepicker" name="tanggal_mcu">
                        </div>
                    {{-- </form> --}}


                    {{-- P.U --}}
                    <div class="card-header">
                        <h4>Pemeriksaan Umum</h4>
                    </div>
                    <div class="form-group">
                        <label>Sistole</label>
                        <input type="number" class="form-control is-valid" name="sistole">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Diastole</label>
                        <input type="number" class="form-control is-valid" name="diastole">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nadi</label>
                        <input type="number" class="form-control is-valid" name="nadi">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input type="number" class="form-control is-valid" name="tb">
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="number" class="form-control is-valid" name="bb">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>BMI 0.</label>
                        <input type="decimal" class="form-control is-valid" name="bmi">
                        <div class="valid-feedback"></div>
                    </div>
                    {{-- Pemeriksaab Lab --}}
                    <div class="card-header">
                        <h4>Pemeriksaan Lab</h4>
                    </div>
                    <div class="form-group">
                          <label>Hemoglobin 0.</label>
                          <input type="decimal" class="form-control is-valid" name="hb">
                          <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Colestrol</label>
                        <input type="number" class="form-control is-valid" name="cl">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Triliserida</label>
                        <input type="number" class="form-control is-valid" name="trig">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Gula Darah Puasa</label>
                        <input type="number" class="form-control is-valid"  name="gdp">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Asam Urat 0.</label>
                        <input type="decimal" class="form-control is-valid" name="au">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Ur</label>
                        <input type="number" class="form-control is-valid" name="ur">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Creatinin 0.</label>
                        <input name="cre" type="decimal" class="form-control is-valid">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>SGOT</label>
                        <input name="sgot" type="number" class="form-control is-valid">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>SGPT</label>
                        <input name="sgpt" type="number" class="form-control is-valid">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Abnormal Lab</label>
                        <input name="ablab" type="text" class="form-control is-valid">
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">HbsAg</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="hbsag" value="Non Reaktif" id="hbsag">
                            <label class="form-check-label" for="hbsag">Non Reaktif</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="hbsag" value="Reaktif" id="hbsag">
                            <label class="form-check-label" for="hbsag">Reaktif</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">AntiHbs</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="antihbs" value="Non Reaktif" id="antihbs">
                            <label class="form-check-label" for="antihbs">Non Reaktif</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="antihbs" value="Reaktif" id="antihbs">
                            <label class="form-check-label" for="antihbs">Reaktif</label>
                        </div>
                    </div>
                    <div class="section-title">Urin</div>
                        <div class="form-group">
                        <div class="input-group">
                          <select class="custom-select" name="urin" id="urin">
                            <option selected>Choose...</option>
                            <option value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>
                            <option value="Bronchitis">Bronchitis</option>
                          </select>
                          <input name="urin_t" type="text" class="form-control">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Button</button>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="d-block">Narkoba</label>
                          <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="narkoba" value="Negatif" id="narkoba">
                            <label class="form-check-label" for="narkoba">Negatif</label>
                          </div>
                          <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="narkoba" value="Positif" id="narkoba">
                            <label class="form-check-label" for="narkoba">Positif</label>
                          </div>
                      </div>
                    {{-- Pemeriksaan Fisik --}}

                    {{-- END --}}
                </div>
                {{-- ./card body --}}
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </form>

              {{-- coba --}}
              @if (isset($diagnosis))
                <div class="mt-5">
                    <h3>Diagnosis Results</h3>
                    <ul class="list-group">
                        @foreach ($diagnosis as $result)
                            <li class="list-group-item">{{ $result }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              {{-- ./coba --}}

            </div>
          </div>

        </div>
      </div>
    </section>
{{-- ./main content --}}
@endsection
@section('sidebar')
    @parent

@endsection


