@extends('dbtemplate')

@section('atas')
    <h3>Tambah Karyawan</h3>

    <a href="/karyawan" class="btn btn-primary btn-sm">Kembali </a>
@endsection

@section('bawah')

	<form class="form-horizontal" action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">kodepegawai</label>
            <div class="col-sm-10">
		    <input class="form-control" type="text" name="kodepegawai" placeholder="Masukkan Nama Lengkap karyawan" id="kodepegawai"  required="required"> <br/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">namalengkap</label>
            <div class="col-sm-10">
		    <input class="form-control" type="text" name="namalengkap" placeholder="Masukkan Nama Lengkap karyawan" id="namalengkap"  required="required"> <br/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">divisi</label>
            <div class="col-sm-10">
		    <input class="form-control" type="text" name="divisi" placeholder="Masukkan divis karyawan" id="divisi" required="required"> <br/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">departemen</label>
            <div class="col-sm-10">
		    <input class="form-control" type="text" name="departemen" placeholder="Masukkan Departemen Karyawan" id="departemen" required="required"> <br/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>


	</form>

@endsection

