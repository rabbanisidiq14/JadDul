@extends('layouts.app')

@section('content')
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<th>Nama</th>
				<th>Matpel</th>
			</tr>
			@foreach($guru as $g)
			<tr>
				<td>{{ $g->nama_guru }}</td>
				<td>{{ $g->nama_matpel }}</td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection