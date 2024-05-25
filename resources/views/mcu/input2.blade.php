@extends('layouts.app')

<link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">

@section('title','Input MCU')

@section('content')

{{-- Main Content --}}
<section class="section">
    <div class="section-header">
        <h1>Input Data MCU</h1>
    </div>

    {{-- Section Body --}}
    <div class="section-body">
        {{-- row --}}
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
            {{-- Card --}}
            <div class="card">
                <form>
                    <div class="card-header">
                      <h4>Data Karyawan</h4>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Karyawan</label>
                            <input type="text" class="form-control is-valid" value="Rizal Fakhri" required="">
                        <div class="valid-feedback"></div>
                      </div>
                        <div class="form-group">
                          <label>NIK</label>
                          <input type="text" class="form-control is-valid" value="20552011" required="">
                          <div class="valid-feedback">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Departemen</label>
                          <select class="form-control select2" required="">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control select2">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Tempat MCU</label>
                            <select class="form-control select2">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                            </select>
                          </div>
                        <div class="form-group">
                            <label class="d-block">Jenis Kelamin</label>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                              <label class="form-check-label" for="exampleRadios1">Laki-laki</label>
                            </div>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                              <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Perusahaan</label>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                              <label class="form-check-label" for="exampleRadios1">PT. PPA</label>
                            </div>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                              <label class="form-check-label" for="exampleRadios2">PT. AMM</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Status Medical Check-Up</label>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                              <label class="form-check-label" for="exampleRadios1">Calon Karyawan</label>
                            </div>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                              <label class="form-check-label" for="exampleRadios2">Mutasi</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">Annnual</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date Picker</label>
                            <input type="text" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  {{-- Pemeriksaan Umum --}}
                  <form>
                      <div class="card-header">
                        <h4>Pemeriksaan Umum</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Sistole</label>
                          <input type="number" class="form-control is-valid" value="" required="">
                          <div class="valid-feedback">
                          </div>
                        </div>
                        <div class="form-group">
                            <label>Diastole</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nadi</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tinggi Badan</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Berat Badan</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="card-header">
                            <h4>Pemeriksaan Lab</h4>
                        </div>
                        <div class="form-group">
                            <label>Hemoglobin</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                          </div>
                          <div class="form-group">
                              <label>Colestrol</label>
                              <input type="number" class="form-control is-valid" value="" required="">
                              <div class="valid-feedback">
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Triliserida</label>
                              <input type="number" class="form-control is-valid" value="" required="">
                              <div class="valid-feedback">
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Gula Darah Puasa</label>
                              <input type="number" class="form-control is-valid" value="" required="">
                              <div class="valid-feedback">
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Asam Urat</label>
                              <input type="number" class="form-control is-valid" value="" required="">
                              <div class="valid-feedback">
                              </div>
                          </div>
                          <div class="form-group">
                            <label>Ur</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Creatinin</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>SGOT</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>SGPT</label>
                            <input type="number" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Abnormal Lab</label>
                            <input type="text" class="form-control is-valid" value="" required="">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">HbsAg</label>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                              <label class="form-check-label" for="exampleRadios1">Non Reaktif</label>
                            </div>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                              <label class="form-check-label" for="exampleRadios2">Reaktif</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">AntiHbs</label>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                              <label class="form-check-label" for="exampleRadios1">Non Reaktif</label>
                            </div>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                              <label class="form-check-label" for="exampleRadios2">Reaktif</label>
                            </div>
                        </div>
                        <div class="section-title">Urin</div>
                        <div class="form-group">
                          <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect05">
                              <option selected>Choose...</option>
                              <option value="1">Normal</option>
                              <option value="2">Abnormal</option>
                              <option value="3">Bronchitis</option>
                            </select>
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">Button</button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Narkoba</label>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                              <label class="form-check-label" for="exampleRadios1">Negatif</label>
                            </div>
                            <div class="form-check-inline">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                              <label class="form-check-label" for="exampleRadios2">Positif</label>
                            </div>
                        </div>
                        <div class="section-title">Rotgen</div>
                        <div class="form-group">
                          <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect05">
                              <option selected>Choose...</option>
                              <option value="1">Normal</option>
                              <option value="2">Abnormal</option>
                              <option value="3">Bronchitis</option>
                            </select>
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">Button</button>
                            </div>
                          </div>
                        </div>

                        {{-- Pemeriksaan Fisik --}}
                        <div class="card-header">
                            <h4>Pemeriksaan Fisik</h4>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Mata</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">MIOPIA</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">PTREGIUM</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">NORMAL</label>
                            </div>
                              <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">KATARAK</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">STRABISMUS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Gigi dan Mulut</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">NORMAL</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">CARIESS</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GIGI BERLUBANG</label>
                            </div>
                              <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">CARIESS DAN GIGI BERLUBANG</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Telinga</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">NORMAL</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">ABNORMAL</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">BRONCHITIS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Hemoroid</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">GRADE 1</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GRADE 2</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GRADE 3</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">MENOLAK RT</label>
                            </div>
                            <div class="form-group">
                                <label>Abnormal Lainnya</label>
                                <input type="text" class="form-control is-valid" value="" required="">
                                <div class="valid-feedback"></div>
                            </div>
                        </div>
                        {{-- END --}}

                        {{-- Pemeriksaan Penunjang --}}
                        <div class="card-header">
                            <h4>Pemeriksaan Penunjang</h4>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Spirometry Obstruksi</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">NORMAL</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">RINGAN</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">SEDANG</label>
                            </div>
                              <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">BERAT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Spirometry Restriksi</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">NORMAL</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">CARIESS</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GIGI BERLUBANG</label>
                            </div>
                              <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">CARIESS DAN GIGI BERLUBANG</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Audiometry Kanan</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">NORMAL</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GANGGUAN PENDENGARAN RINGAN</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GANGGUAN PENDENGARAN SEDANG</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GANGGUAN PENDENGARAN BERAT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Audiometry KIRI</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                                <label class="form-check-label" for="exampleRadios1">NORMAL</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GANGGUAN PENDENGARAN RINGAN</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GANGGUAN PENDENGARAN SEDANG</label>
                            </div>
                              <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                                <label class="form-check-label" for="exampleRadios2">GANGGUAN PENDENGARAN BERAT</label>
                            </div>
                        </div>
                        {{-- END --}}
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                      </div>
                    </form>


            </div>
            {{-- ./card --}}

        </div>
        {{-- ./row --}}
    </div>
    {{-- ./section body --}}
</section>
{{-- ./main content --}}
@endsection
@section('sidebar')
    @parent

@endsection


