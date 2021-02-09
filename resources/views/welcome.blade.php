@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>VITRINE</h1></div>
                    
                    <div class="card-body">
                        <div class="row">
                            @foreach ($vitrine as $produto)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ url("storage/{$produto->imagem}") }}" alt="{{ $produto->nome }}" style="max-width:150px; align:center">
                                    <div class="caption text-center">
                                        <h5><a href="#">{{$produto->nome}}</a></h5>
                                        <p><a href="#" class="btn btn-primary" role="button">Comprar</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    @endsection