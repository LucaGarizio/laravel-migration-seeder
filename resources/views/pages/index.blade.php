

@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>treni: {{ count($trains) }}</h1>
<div class="container-fluid">
    <div class="row me-auto">
        <div class="col-2 border">
            <ul p-0>
                <h6>Azienda</h6>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> nome }} 
                    </li>
                @endforeach
            </ul>
        </div>
        
        <div class="col-2 border">
            <ul p-0>
                <h6>Luogo</h6>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> luogo }} 
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-2 border">
            <ul p-0>
                <h6>Partenza</h6>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> orario_di_partenza }} 
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul p-0>
                <h6>Arrivo</h6>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> orario_di_arrivo }} 
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul p-0>
                <h6>Codice</h6>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> codice_treno }} 
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul p-0>
                <h6>Carrozze</h6>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> numero_carrozze }} 
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul p-0>
                <h6>In Orario</h6>
                @foreach ($trains as $train)
                <li>
                    {{ $train -> disponibile }} 
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-1 border">
            <ul p-0>
                <h6>Cancellato</h6>
                @foreach ($trains as $train)
                    <li>
                        {{ $train -> cancellato }} 
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection