@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
    @endif
    @forelse($reposts as $post)
        @include('reposts.repost')
    @empty
        <h2>No hay post...</h2>
    @endforelse
@endsection

