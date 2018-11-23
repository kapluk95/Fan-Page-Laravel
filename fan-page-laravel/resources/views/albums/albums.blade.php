<a href="/albums/{{ $album->id }}">
<div class="card-group h-100 d-inline-block album">
    <div class="card h-100 d-inline-block ">
        <img class="card-img-top" src="{{ $album->images[0]->url }}" alt="Card image cap" style="padding:5px; width:280px; height:300px;">
        <div class="card-body">
            <center><h5 class="card-title">{{ $album->name  }}</h5></center>
        </div>
    </div>
</div>
</a>


