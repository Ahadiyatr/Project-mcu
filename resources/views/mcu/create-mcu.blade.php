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
                        <div class="form-group">
                            <label>No MCU</label>
                            <input type="text" class="form-control is-valid" id="no_mcu" name="no_mcu">
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Nama Karyawan</label>
                            <input type="text" class="form-control is-valid" id="nama_karyawan" name="nama_karyawan">
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control is-valid" id="nik_karyawan" name="nik_karyawan" >
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label>Departemen</label>
                            <select name="departemen_id" id="departemen_id" class="form-control select2">
                                <option value=""> - Pilih - </option>
                                @foreach ($departemen as $dept)
                                <option value="{{ $dept->id}}"> {{ $dept->departemen}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select name="jabatan_id" id="jabatan_id" class="form-control select2">
                                <option value=""> - Pilih - </option>
                                @foreach ($jabatan as $jab)
                                <option value="{{ $jab->id}}"> {{ $jab->jabatan}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat MCU</label>
                            <input type="text" class="form-control is-valid" id="tempat_mcu" name="tempat_mcu">
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Jenis Kelamin</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin">
                                <label class="form-check-label" for="Laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin">
                                <label class="form-check-label" for="Perempuan">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="number" class="form-control is-valid" name="umur">
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Perusahaan</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="perusahaan" value="PT. PPA" id="perusahaan">
                                <label class="form-check-label" for="exampleRadios1">PT. PPA</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="perusahaan" value="PT. AMM" id="perusahaan">
                                <label class="form-check-label" for="exampleRadios2">PT. AMM</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Status Medical Check-Up</label>
                            <div class="form-check-inline">
                                <input  class="form-check-iput" type="radio" name="status_mcu" value="Calon Karyawan" id="status_mcu">
                                <label class="form-check-label" for="status_mcu"> Calon Karyawan</label>
                            </div>
                            <div class="form-check-inline">
                                <input  class="form-check-input" type="radio" name="status_mcu" value="Mutasi" id="status_mcu">
                                <label class="form-check-label" for="status_mcu">Mutasi</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="status_mcu" value="Annual" id="status_mcu">
                                <label class="form-check-label" for="status_mcu">Annnual</label>
                            </div>
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
                        <input type="text" class="form-control is-valid" name="bmi">
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
                    <div class="card-header">
                        <h4>Pemeriksaan Fisik</h4>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Mata</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="mata" value="Miopia" id="mata">
                            <label class="form-check-label" for="mata">MIOPIA</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="mata" value="Ptregium" id="mata">
                            <label class="form-check-label" for="mata">PTREGIUM</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="mata" value="Normal" id="mata">
                            <label class="form-check-label" for="mata">NORMAL</label>
                        </div>
                          <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="mata" value="Katarak" id="mata">
                            <label class="form-check-label" for="mata">KATARAK</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="mata" value="Strabismus" id="mata">
                            <label class="form-check-label" for="mata">STRABISMUS</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Gigi dan Mulut</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gigimulut" value="Normal" id="gigimulut">
                            <label class="form-check-label" for="gigimulut">NORMAL</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gigimulut" value="Cariess" id="gigimulut">
                            <label class="form-check-label" for="gigimulut">CARIESS</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gigimulut" value="Gigi Berlubang" id="gigimulut">
                            <label class="form-check-label" for="gigimulut">GIGI BERLUBANG</label>
                        </div>
                          <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="gigimulut" value="Cariess dan Gigi Berlubang" id="gigimulut">
                            <label class="form-check-label" for="gigimulut">CARIESS DAN GIGI BERLUBANG</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Telinga</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="telinga" value="Normal" id="telinga">
                            <label class="form-check-label" for="telinga">NORMAL</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="telinga" value="Abnormal" id="telinga">
                            <label class="form-check-label" for="telinga">ABNORMAL</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="telinga" value="Bronchitis" id="telinga">
                            <label class="form-check-label" for="telinga">BRONCHITIS</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Hemoroid</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="hemoroid" value="Grade 1" id="hemoroid">
                            <label class="form-check-label" for="hemoroid">GRADE 1</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="hemoroid" value="Grade 2" id="hemoroid">
                            <label class="form-check-label" for="hemoroid">GRADE 2</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="hemoroid" value="Grade 3" id="hemoroid">
                            <label class="form-check-label" for="hemoroid">GRADE 3</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="hemoroid" value="Menolak RT" id="hemoroid">
                            <label class="form-check-label" for="hemoroid">MENOLAK RT</label>
                        </div>
                        <div class="form-group">
                            <label>Abnormal Lainnya</label>
                            <input type="text" class="form-control is-valid" name="ablain">
                            <div class="valid-feedback"></div>
                        </div>
                    </div>

                    {{-- ./Fisik --}}
                    {{-- Pemeriksaan Penunjang --}}
                    <div class="card-header">
                        <h4>Pemeriksaan Penunjang</h4>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Spirometry Obstruksi</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_o" value="Normal" id="spiro_o">
                            <label class="form-check-label" for="spiro_o">NORMAL</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_o" value="Ringan" id="spiro_o">
                            <label class="form-check-label" for="spiro_o">RINGAN</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_o" value="Sedang" id="spiro_o">
                            <label class="form-check-label" for="spiro_o">SEDANG</label>
                        </div>
                          <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_o" value="Berat" id="spiro_o">
                            <label class="form-check-label" for="spiro_o">BERAT</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Spirometry Restriksi</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_r" value="Normal" id="spiro_r">
                            <label class="form-check-label" for="spiro_r">NORMAL</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_r" value="Cariess" id="spiro_r">
                            <label class="form-check-label" for="spiro_r">CARIESS</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_r" value="Gigi Berlubang" id="spiro_r">
                            <label class="form-check-label" for="spiro_r">GIGI BERLUBANG</label>
                        </div>
                          <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="spiro_r" value="Cariess dan Gigi Berlubang" id="spiro_r">
                            <label class="form-check-label" for="spiro_r">CARIESS DAN GIGI BERLUBANG</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Audiometry Kanan</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kanan" value="Normal" id="audi_kanan">
                            <label class="form-check-label" for="audi_kanan">NORMAL</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kanan" value="Gangguan Pendengaran Ringan" id="audi_kanan">
                            <label class="form-check-label" for="audi_kanan">GANGGUAN PENDENGARAN RINGAN</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kanan" value="Gangguan Pendengaran Sedang" id="audi_kanan">
                            <label class="form-check-label" for="audi_kanan">GANGGUAN PENDENGARAN SEDANG</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kanan" value="Gangguan Pendengaran Berat" id="audi_kanan">
                            <label class="form-check-label" for="audi_kanan">GANGGUAN PENDENGARAN BERAT</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Audiometry KIRI</label>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kiri" value=" Normal" id="audi_kiri">
                            <label class="form-check-label" for="audi_kiri">NORMAL</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kiri" value="Gangguan Pendengaran Ringan" id="audi_kiri">
                            <label class="form-check-label" for="audi_kiri">GANGGUAN PENDENGARAN RINGAN</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kiri" value="Gangguan Pendengaran sedang" id="audi_kiri">
                            <label class="form-check-label" for="audi_kiri">GANGGUAN PENDENGARAN SEDANG</label>
                        </div>
                          <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="audi_kiri" value="Gangguan Pendengaran Berat" id="audi_kiri">
                            <label class="form-check-label" for="audi_kiri">GANGGUAN PENDENGARAN BERAT</label>
                        </div>
                    </div>
                    {{-- END --}}
                </div>
                {{-- ./card body --}}
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </form>
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


