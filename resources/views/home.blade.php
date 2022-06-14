
@extends('layouts.app')



@section('content')



<div class="container">
<h1>Agenzia di Viaggi</h1>
    <div class="row mt-5">
        @forelse($travels as $travel)
        <div class="col-3">
            <div class="card">
                <div class="card-img-top">
                    <img class="img-fluid" src="{{$travel->immagine}}" alt="">
                </div>
                <div class="card-text p-4">
                    <h5>Viaggio a {{$travel->destinazione}}</h5>
                    <p class="lh-1"> 
                        <strong>Partenza: </strong>{{$travel->data_partenza}}
                    </p>
                    <p class="lh-1 text-end">
                   
                        {{$travel->numero_giorni}} Giorni {{$travel->numero_notti}} Notti
                        
                    </p>
                    <p class="lh-1">
                    Camera : {{$travel->tipo_di_camera}}
                    </p>
                    <p class="lh-1">
                        {{$travel->descrizione}}
                    </p>
                    <div class="box-price bg-primary text-white fs-5 text-end p-2">
                        € {{$travel->prezzo}}
                    </div>
                </div>
                
            </div>
        </div>
        @empty
        <div class="col-12">
            nothing to show :c
        </div>
        @endforelse
    </div>
</div>


@endsection
