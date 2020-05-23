@extends('layouts.app')

@section('content')
	<div class="container">
		<table class="table table-bordered table->striped">
			<tr>
				<th>Mulai</th>
				<th>Berakhir</th>
				<th>Ruangan</th>
				<th>Kelas</th>
				<th>Matpel</th>
				<th>Guru</th>
			</tr>
			@foreach($jadwal as $jadwals)
			<tr>
				<td>{{ $jadwals->pel_begin }}</td>
				<td>{{ $jadwals->pel_end }}</td>
				<td>{{ $jadwals->nama_ruangan }}</td>
				<td><a href="/kelas/{{ $jadwals->id_kelas }}/hari/{{ $hari }}">{{ $jadwals->nama_kelas }}</a></td>
				<td><a href="/matpel/{{ $jadwals->id_matpel }}">{{ $jadwals->nama_matpel }}</a></td>
				<td><a href="/guru/{{ $jadwals->id_guru }}">{{ $jadwals->nama_guru }}</a></td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection