
<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h5 class="titleSong">
            <a href={{$songs->external_urls->spotify}}>
                <i class="fab fa-spotify fa-1x " data-toggle="tooltip" data-placement="buttom" title="Abrir en Spotify"></i>
            </a>
            {{ $songs->name }}
        </h5>
        <audio src={{$songs->preview_url}} className="reproductor"controls="controls" type="audio/mpeg" preload="none"></audio>
        <div class="icons">
            <form method="POST" action={{ route('repostear') }}>
                @csrf
                <input type="hidden" name="songName" value="{{ $songs->name }}">
                <input type="hidden" name="urlSpotify" value="{{$songs->external_urls->spotify}}">
                <input type="hidden" name="previewSpotify" value="{{$songs->preview_url}}">
                <button type="submit" class="btn "><i class="fas fa-retweet"></i></button>
                <button type="submit" class="btn"><i class="far fa-heart"></i></button>
                    
            </form>
        </div>

    </li>
</ul>


