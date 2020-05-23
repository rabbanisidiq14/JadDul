@extends('layouts.app')

@section('content')
	<div class="container">
		@foreach($nama as $n)
		<h1 class="display-3 text-center">Kelas: {{ $n->nama_kelas }} </h1>
		@endforeach
		<table class="table table-bordered">
			<tr>
				<th>Matpel</th>
				<th>Guru</th>
				<th>Mulai</th>
				<th>Berakhir</th>
			</tr>
			@foreach($kelas as $k)
			<tr>
				<td>{{ $k->nama_matpel }}</td>
				<td>{{ $k->nama_guru }}</td>
				<td>{{ $k->pel_begin }}</td>
				<td>{{ $k->pel_end }}</td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection