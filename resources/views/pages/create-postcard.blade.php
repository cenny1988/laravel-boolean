@extends('layouts.main-layout')
@section('content')
    
    <h3>Crea qui il novo postcard:</h3>

    <form action="{{route('postcard.store')}}" method="POST" class="container"> 

        @method('POST')
        @csrf

        <div class="form-group row">
            <div class="">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                <input type="text" name="name">
            </div>
            
            <div class="">
                <label for="address" class="col-md-4 col-form-label text-md-right">Indirizzo</label>
                <input type="text" name="address">
            </div>

            <div>
                <label for="image">Carica immagine</label>
                <input type="file" class="form-control-file">
            </div>
            
            <div class="col-md-4">
                <label for="text"  class="col-md-4 col-form-label text-md-right">Testo</label>
                <textarea class="form-control" name="text" rows="3"></textarea>
            </div>
        </div>

        


        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-success" value="CREATE">
                    CREATE
                </button>
                <a href="{{route('home')}}" class="btn btn-secondary" value="BACK">
                    Indietro
                </a>
            </div>
        </div>

    </form>
@endsection