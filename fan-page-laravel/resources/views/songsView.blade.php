
@extends('layouts.app')
@section('content')
    <div class="content">
        
        @forelse($canciones as $songs)
            @include('songs.songs')
        @empty
            <h2>No hay posts...</h2>
        @endforelse
    </div>
@endsection


