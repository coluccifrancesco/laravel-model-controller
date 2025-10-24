@extends('layouts.master')

@section('filmDisplay')
    
    @foreach ($movies as $movie) 
    
    <x-movie-card>
        <x-slot:title>{{$movie['original_title']}}</x-slot:title>
        <x-slot:vote>{{ $movie['vote'] }}</x-slot:vote>
        <x-slot:date>{{ $movie['date'] }}</x-slot:date>
        <x-slot:origin>{{ $movie['nationality'] }}</x-slot:origin>
    </x-movie-card>
    
    @endforeach

@endsection