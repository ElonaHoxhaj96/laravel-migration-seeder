{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
<h1>Lista dei treni</h1>
<div class="container d-flex wrap">
    @foreach($trains as $train)
        <div class="card mb-2 mt-2" style="width: 18rem;">
        <div class="card-header">
            <h3>Treno:{{$train->train_code}}</h3>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{$train->id}}</li>
            <li class="list-group-item">Azienda: {{$train->company}}</li>
            <li class="list-group-item">Stazione di partenza: {{$train->departure_station}}</li>
            <li class="list-group-item">Stazione di arrivo:{{$train->arrival_station}}</li>
            <li class="list-group-item">Orario di partenza: {{$train->department_time}}</li>
            <li class="list-group-item">Orario di arrivo: {{$train->arrival_time}}</li>
            <li class="list-group-item">Carrozza nr.:{{$train->carriage_number}}</li>
            <li class="list-group-item">In orario: {{$train->on_time}}</li>
            <li class="list-group-item">Cancellato: {{$train->deleted}}</li>
        </ul>
        </div>
    @endforeach  
</div>
</div>

@endsection
id`, `company`, `departure_station`, `arrival_station`, `arrival_time`, `train_code`, `carriage_number`, `on_time`, `deleted

@section('titlePage')
   Treni
@endsection

