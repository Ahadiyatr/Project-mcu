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
                  <div class="badges">
                      <span class="badge badge-primary">Export</span>
                  </div>
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
                          <th>NO</th>
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
