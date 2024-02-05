@extends('layout.app')

@section('title')
esercizio
@endsection


@section('main-section')
<p>main</p>



<div class="container-fluid">
    <div class="row">
        @forelse ($trains as $train)
            <div class="col-3">
                <p>{{ $train->company }}</p>
                <p>{{ $train->departure_station }}</p>
                <p>{{ $train->arrival_station }}</p>
                <p>{{ $train->departure_time }}</p>
                <p>{{ $train->arrival_time}}</p>
                <p>{{ $train->train_code }}</p>
                <p>{{ $train->number_of_carriages}}</p>
                <p>{{ $train->in_time }}</p>
                <p>{{ $train->deleted }}</p>  
            </div>
        @empty
            <div class="col-12">
                <p>nessun treno trovato</p>
            </div>

    
        @endforelse
        
        
    </div>
</div>
    




@endsection
