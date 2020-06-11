@extends('layouts.app')

@section('content')
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<th>Matpel</th>
				<th>Guru</th>
			</tr>
			@foreach($matpel as $g)
			<tr>
				<td>{{ $g->nama_matpel }}</td>
				<td>{{ $g->nama_guru }}</td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection