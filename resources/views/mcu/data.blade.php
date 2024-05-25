@extends('layouts.app')

@section('title','MCU-Data')

@section('content')

    <section class="section">
      <div class="section-header">
        <h1>Data MCU</h1>
      </div>
      <div class="buttons">
        <a href="/create-mcu" class="btn btn-primary">Tambah Data</a>
        <a href="#" class="btn btn-info">FIlter</a>
      </div>
      <div class="section-body">
        <section class="section">
            <div class="section-body">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Data MCU Karyawan</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped" id="table-2">
                          <thead>
                            <tr>
                              <th class="text-center">
                                <div class="custom-checkbox custom-control">
                                  <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                  <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                </div>
                              </th>
                              <th>#</th>
                              <th>No MCU</th>
                              <th>Nama</th>
                              <th>NIK</th>
                              <th>Perusahaan</th>
                              <th>Departemen</th>
                              <th>Jabatan</th>
                              <th>Jenis Kelamin</th>
                              <th>Tempat MCU</th>
                              <th>Status MCU</th>
                              <th>Tanggal MCU</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $mcu)
                            <tr>
                                <td>
                                  <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                  </div>
                                </td>
                                <td scope="row"> {{ $no++ }}</td>
                                <td scope='row'> {{ $mcu->no_mcu }} </td>
                                <td scope='row'> {{ $mcu->nama_karyawan }}</td>
                                <td scope='row'> {{ $mcu->nik_karyawan }}</td>
                                <td scope='row'> {{ $mcu->perusahaan }}</td>
                                <td scope='row'> {{ $mcu->departemen->departemen }}</td>
                                <td scope='row'> {{ $mcu->jabatan->jabatan }}</td>
                                <td scope='row'> {{ $mcu->jenis_kelamin }}</td>
                                <td scope='row'> {{ $mcu->tempat_mcu }}</td>
                                <td scope='row'> {{ $mcu->status_mcu }}</td>
                                <td scope='row'> {{ $mcu->tanggal_mcu }}</td>
                                <td><div class="badge badge-success">FIT TO WORK</div></td>
                                <td><a href="/detail-mcu/{{ $mcu->id }}" class="btn btn-secondary">Detail</a></td>
                                <td><a href="/show-mcu/{{ $mcu->id}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                              </tr>
                            @endforeach

                            {{--  --}}

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Advanced Table</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped" id="table-2">
                          <thead>
                            <tr>
                              <th class="text-center">
                                <div class="custom-checkbox custom-control">
                                  <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                  <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                </div>
                              </th>
                              <th>Task Name</th>
                              <th>Progress</th>
                              <th>Members</th>
                              <th>Due Date</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="custom-checkbox custom-control">
                                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                  <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                </div>
                              </td>
                              <td>Create a mobile app</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                  <div class="progress-bar bg-success" data-width="100%"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                              </td>
                              <td>2018-01-20</td>
                              <td><div class="badge badge-success">Completed</div></td>
                              <td><a href="#" class="btn btn-secondary">Detail</a></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="custom-checkbox custom-control">
                                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                  <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                </div>
                              </td>
                              <td>Redesign homepage</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                                  <div class="progress-bar" data-width="0"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                                <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                                <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                              </td>
                              <td>2018-04-10</td>
                              <td><div class="badge badge-info">Todo</div></td>
                              <td><a href="#" class="btn btn-secondary">Detail</a></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="custom-checkbox custom-control">
                                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                  <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                </div>
                              </td>
                              <td>Backup database</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                                  <div class="progress-bar bg-warning" data-width="70%"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                                <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                              </td>
                              <td>2018-01-29</td>
                              <td><div class="badge badge-warning">In Progress</div></td>
                              <td><a href="#" class="btn btn-secondary">Detail</a></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="custom-checkbox custom-control">
                                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                  <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                </div>
                              </td>
                              <td>Input data</td>
                              <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                  <div class="progress-bar bg-success" data-width="100%"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                                <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                                <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                              </td>
                              <td>2018-01-16</td>
                              <td><div class="badge badge-success">Completed</div></td>
                              <td><a href="#" class="btn btn-secondary">Detail</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </section>

        {{-- 2 --}}


    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src=" {{ asset('assets/modules/datatables/datatables.min.js')}} "></script>
    <script src=" {{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}} "></script>
    <script src=" {{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="assets/js/page/modules-datatables.js"></script>

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    </section>
@endsection

@section('sidebar')
@parent

    @endsection




