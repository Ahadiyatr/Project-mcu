@extends('layouts.app')

@section('title','Detail MCU')

@section('content')

{{-- Main Content --}}
<section class="section">
    {{-- Header Page --}}
    <div class="section-header">
        <h1>Detail MCU</h1>
    </div>
    {{-- ./ Header Page--}}

    {{-- Section Body --}}
    <div class="section-body">
        <div class="d-flex justify-content-end mb-2">
            <a href="#" class="btn btn-icon icon-left btn-primary"><i class="ion-printer"></i> Print</a>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <tbody>
                            <div class="form-group row">
                                <label>No MCU</label>
                                <div class="col-sm-8">
                                    : {{ $data->no_mcu }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Nama Karyawan</label>
                                <div class="col-sm-8">
                                    : {{ $data->nama_karyawan }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>NIK</label>
                                <div class="col-sm-8">
                                    : {{ $data->nik_karyawan }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label>Perusahaan</label>
                                <div class="col-sm-8">
                                    : {{ $data->perusahaan }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Departemen</label>
                                <div class="col-sm-8">
                                    : {{ $data->departemen->departemen }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Jabatan</label>
                                <div class="col-sm-8">
                                    : {{ $data->jabatan->jabatan }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Umur</label>
                                <div class="col-sm-8">
                                    : {{ $data->umur }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    : {{ $data->jenis_kelamin }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Tempat MCU</label>
                                <div class="col-sm-8">
                                    : {{ $data->tempat_mcu }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Tanggal MCU</label>
                                <div class="col-sm-8">
                                    : {{ $data->tanggal_mcu }}
                                </div>
                            </div>
                        </tbody>
                    </div>
                    <div class="section-title">Pemeriksaan Umum</div>
                        <div class="table table-bordered">
                        <table class="table table-sm">
                            <tbody>
                              <tr>

                                <td>Sistole</td>
                                <td>{{ $data->sistole }}</td>
                              </tr>
                              <tr>

                                <td>Diastole</td>
                                <td>{{ $data->diastole }}</td>
                              </tr>
                              <tr>

                                <td>Nadi</td>
                                <td>{{ $data->nadi }}</td>
                              </tr>
                              <tr>

                                <td>Tinggi Badan</td>
                                <td>{{ $data->tb }}</td>
                              </tr>
                              <tr>

                                <td>Berat Badan</td>
                                <td>{{ $data->bb }}</td>
                              </tr>
                              <tr>

                                <td>BMI</td>
                                <td>{{ $data->bmi }}</td>
                              </tr>
                              <tr>

                                <td>Hemoglobin</td>
                                <td>{{ $data->hb }}</td>
                              </tr>
                              <tr>

                                <td>Colestrol</td>
                                <td>{{ $data->cl }}</td>
                              </tr>
                              <tr>

                                <td>Trigliserida</td>
                                <td>{{ $data->trig }}</td>
                              </tr>
                              <tr>

                                <td>Gula Darah Puasa</td>
                                <td>{{ $data->gdp }}</td>
                              </tr>
                              <tr>

                                <td>Asam Urat</td>
                                <td>{{ $data->au }}</td>
                              </tr>
                              <tr>

                                <td>Urium</td>
                                <td>{{ $data->ur }}</td>
                              </tr>
                              <tr>

                                <td>Creatinin</td>
                                <td>{{ $data->cre }}</td>
                              </tr>
                              <tr>

                                <td>SGOT</td>
                                <td>{{ $data->sgot }}</td>
                              </tr>
                              <tr>

                                <td>SGPT</td>
                                <td>{{ $data->sgpt }}</td>
                              </tr>
                              <tr>

                                <td>Abnormal Lab</td>
                                <td>{{ $data->ablab }}</td>
                              </tr>
                              <tr>

                                <td>HbsAg</td>
                                <td>{{ $data->hbsag }}</td>
                              </tr>
                              <tr>

                                <td>AntiHbs</td>
                                <td>{{ $data->antihbs }}</td>
                              </tr>
                              <tr>

                                <td>Urin</td>
                                <td>{{ $data->urin }} - Temuan :{{ $data->urin_t }} </td>
                              </tr>
                              <tr>
                                <td>mata</td>
                                <td>{{ $data->mata }}</td>
                              </tr>
                              <tr>
                                <td>Gigi dan Mulut</td>
                                <td>{{ $data->gigimulut }}</td>
                              </tr>
                              <tr>
                                <td>Hemoroid</td>
                                <td>{{ $data->hemoroid }}</td>
                              </tr>
                              <tr>
                                <td>Abnormal Lainnya</td>
                                <td>{{ $data->ablain }}</td>
                              </tr>
                              <tr>
                                <td>Spirometry Obstruksi</td>
                                <td>{{ $data->spiro_o }}</td>
                              </tr>
                              <tr>
                                <td>Spirometry Obstruksi</td>
                                <td>{{ $data->spiro_r }}</td>
                              </tr>
                              <tr>
                                <td>Audio Kanan</td>
                                <td>{{ $data->audi_kanan }}</td>
                              </tr>
                              <tr>
                                <td>Audio Kiri</td>
                                <td>{{ $data->audi_kiri }}</td>
                              </tr>
                            </tbody>
                        </table>
                            <tbody>
                                <div class="form-group row">
                                  <label>Petugas</label>
                                  <div class="col-sm-8">
                                      : {{ auth()->user()->name }}
                                  </div>
                                </div>

                            </tbody>
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
