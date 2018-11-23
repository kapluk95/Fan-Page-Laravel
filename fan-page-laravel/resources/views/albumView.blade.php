
    @extends('layouts.app')
    @section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                @forelse($todo as $album)
                <div class="col-3">
                    @include('albums.albums')
                </div>
                @empty
                    <h2>No hay posts...</h2>
                @endforelse
            </div>  
        </div>
    </div>
    @endsection


