@extends('layouts.main-layout')
@section('content')
    {{-- Visualizza errori nella digitazione dei campi form precedenti --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <h3>Crea qui il novo postcard:</h3>

    <form 
        action="{{route('postcard.store')}}"
        method="POST" 
        class="container"
        {{-- da inserire per i formati file --}}
        enctype="multipart/form-data"> 

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
                <input type="file" name="image" class="form-control-file">
            </div>
            
            <div class="col-md-4">
                <label for="text"  class="col-md-4 col-form-label text-md-right">Testo</label>
                <textarea name="text" rows="3" class="form-control"></textarea>
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