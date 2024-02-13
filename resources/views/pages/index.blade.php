

@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>treni: {{ count($trains) }}</h1>
<div class="container">
    <div class="row me-auto">
        <div class="col-2 border">
            <ul>
                <h6>Azienda</h6>
                <hr>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> nome }} 
                    </li>
                    <hr>
                @endforeach
        </div>
        
        <div class="col-2 border">
            <ul>
                <h6>Luogo</h6>
                <hr>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> luogo }} 
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
        <div class="col-2 border">
            <ul>
                <h6>Partenza</h6>
                <hr>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> orario_di_partenza }} 
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
        <div class="col-2 border">
            <ul>
                <h6>Arrivo</h6>
                <hr>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> orario_di_arrivo }} 
                    </li>
                    <hr>
                @endforeach
            </ul>
            
        </div>
        <div class="col-1 border">
            <ul>
                <h6>Codice</h6>
                <hr>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> codice_treno }} 
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul>
                <h6>Carrozze</h6>
                <hr>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> numero_carrozze }} 
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul>
                <h6>In Orario</h6>
                <hr>
                @foreach ($trains as $train)
                <li>
                    {{ $train -> disponibile }} 
                </li>
                <hr>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul>
                <h6>Cancellato</h6>
                <hr>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> cancellato }} 
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection