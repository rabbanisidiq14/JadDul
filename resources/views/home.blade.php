@extends('layouts.app')

@section('content')
<div class="container">

    <!-- SVG denah -->
    <!-- Under Development -->
   <!--  <svg style="width: 100%; right: 0;" height="700">
        <g>
            <rect x="1000" y="400" height="40" width="40" style="fill:blue;stroke:black;stroke-width:2;fill-opacity:0.1;stroke-opacity:0.9"  />
            <text x="5" y="30" font-family="Verdana" font-size="10" fill="blue">A.2.5</text>
        </g>
        <g>
            <rect x="" y="50" height="50" width="50" style="fill:blue;stroke:black;stroke-width:2;fill-opacity:0.1;stroke-opacity:0.9"  />
            <text x="5" y="80" font-family="Verdana" font-size="10" fill="blue">A.2.4</text>
        </g>
        <g>
            <rect x="" y="100" height="50" width="50" style="fill:blue;stroke:black;stroke-width:2;fill-opacity:0.1;stroke-opacity:0.9"  />
            <text x="5" y="130" font-family="Verdana" font-size="10" fill="blue">A.2.3</text>
        </g>
        <g>
            <rect x="" y="150" height="50" width="50" style="fill:blue;stroke:black;stroke-width:2;fill-opacity:0.1;stroke-opacity:0.9"  />
            <text x="5" y="180" font-family="Verdana" font-size="10" fill="blue">A.2.2</text>
        </g>
        <g>
            <rect x="" y="200" height="50" width="50" style="fill:blue;stroke:black;stroke-width:2;fill-opacity:0.1;stroke-opacity:0.9"  />
            <text x="5" y="230" font-family="Verdana" font-size="10" fill="blue">A.2.1</text>
        </g>
    </svg> -->


    <h1 class="display-3 text-center">Hari: {{ $hari_ini }}</h1>
   

    <div class="d-flex bd-highlight">
      <div class="p-2 w-100 bd-highlight">
           <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Ruangan
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="list-group">
                            @foreach($ruangan as $ruangans)
                                <ul class="list-group">
                                  <a href="/ruangan/{{ $ruangans->id }}/hari/{{ $hari_ini }}" class="list-item"><li class="list-group-item disabled">{{ $ruangans->nama_ruangan }}</li></a>
                                </ul>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
</div>
@endsection
