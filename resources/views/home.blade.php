@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <h1 class="display-3 text-center">Hari: {{ $hari->format('D') }}</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group">
                    @foreach($ruangan as $ruangans)
                        <a href="/ruangan/{{ $ruangans->id }}/hari/{{ $hari->format('D') }}" class="list-item">{{ $ruangans->nama_ruangan }}</a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
