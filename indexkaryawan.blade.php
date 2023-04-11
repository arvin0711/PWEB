@extends('dbtemplate')


    @section('atas')

	<h3>Data Karyawan</h3>



	<br/>
	<br/>
    @endsection
    @section('bawah')

	<table class="table table-striped" width="100%">
		<tr>
            <th>kodepegawai</th>
			<th>namalengkap</th>
			<th>divisi</th>
			<th>departemen</th>

		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper ($p->namalengkap) }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ strtolower ($p->departemen) }}</td>

			<td>
				<a class="btn btn-dark btn-sm" href="/karyawan/hapus/{{ $p->kodepegawai  }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


	<a class="btn btn-primary btn-sm" href="/karyawan/tambah"> Tambah Karyawan Baru</a>

	<br/>


    @endsection




