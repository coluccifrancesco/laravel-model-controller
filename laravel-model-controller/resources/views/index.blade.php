@extends('layouts.master')

@section('filmDisplay')

    <div class="row p-4">
    
        @foreach ($movies as $movie) 

        <div class="col-12 col-sm-6 my-3">        
            <x-movie-card>
                <x-slot:cardClasses>border p-3 h-100</x-slot:cardClasses>
                <x-slot:title>{{$movie['original_title']}}</x-slot:title>
                <x-slot:vote>{{ $movie['vote'] }}</x-slot:vote>
                <x-slot:date>{{ $movie['date'] }}</x-slot:date>
                <x-slot:origin>{{ $movie['nationality'] }}</x-slot:origin>
            </x-movie-card>
        </div>
        
        
        @endforeach
    
    </div>
    

@endsection