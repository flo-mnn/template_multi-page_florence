@extends('template.main')
@section('content')
    @include('partials.intro')
    @include('partials.cta_home')
    {{-- exo database --}}
    {{-- @foreach($users as $user)
        <h3>{{ $user->nom }}</h3>
        <p>{{ $user->age }}</p>
    @endforeach --}}
@endsection