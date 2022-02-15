@extends('layouts.main-layout')
@section('content')
    
    {{-- route lo invio come props al componente per linkare la rotta da laravel --}}
    <postcard-component route="{{ route('postcard.create') }}" class="text-dark"></postcard-component>
@endsection