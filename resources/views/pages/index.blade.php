@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>treni: {{ count($trains) }}</h1>
    <div class="container m-auto">
        <div class="row me-auto">
            @foreach ($trains as $train)
                <div class="col-2 border">
                    <ul>
                        <h6>Azienda</h6>
                        <hr>
                        <li>{{ $train->agenzia }}</li>
                        
                    </ul>
                </div>
                <div class="col-2 border">
                    <ul>
                        <h6>Luogo</h6>
                        <hr>
                        <li>{{ $train->luogo }}</li>
                        
                    </ul>
                </div>
                <div class="col-2 border">
                    <ul>
                        <h6>Partenza</h6>
                        <hr>
                        <li>{{ $train->orario_di_partenza }}</li>
                        
                    </ul>
                </div>
                <div class="col-2 border">
                    <ul>
                        <h6>Arrivo</h6>
                        <hr>
                        <li>{{ $train->orario_di_arrivo }}</li>
                        <hr>
                    </ul>
                </div>
                <div class="col-1 border">
                    <ul>
                        <h6>Codice</h6>
                        <hr>
                        <li>{{ $train->codice_treno }}</li>
                        
                    </ul>
                </div>
                <div class="col-1 border">
                    <ul>
                        <h6>Carrozze</h6>
                        <hr>
                        <li>{{ $train->numero_carrozze }}</li>
                        <hr>
                    </ul>
                </div>
                <div class="col-1 border">
                    <ul>
                        <h6>In Orario</h6>
                        <hr>
                        <li>{{ $train->disponibile }}</li>
                        
                    </ul>
                </div>
                <div class="col-1 border">
                    <ul>
                        <h6>Cancellato</h6>
                        <hr>
                        <li>{{ $train->cancellato }}</li>
                    
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
