<div class="form-group">
    <label>Perusahaan</label>
    <select name="perusahaan_id" id="perusahaan_id" class="form-control select2">
        <option value=""> - Pilih - </option>
        @foreach ($perusahaan as $pt)
        <option value="{{ $pt->id }}"> {{ $pt->perusahaan}} </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Departemen</label>
    <select name="departemen_id" id="departemen_id" class="form-control select2">
        <option value="{{ $dept->id}}"> - Pilih - </option>
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
