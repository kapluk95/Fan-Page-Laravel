
<div class="modal-content homes">
    <div class="modal-header">
        <div class="modal-title">
           <h3>{{ $post->title }}</h3>
        </div>
    </div>
    <div class="modal-body ">
        <div>
        <p  style="word-wrap: break-word;" >{{$post->body}}</p>
        </div>
        <hr>
    <center><a href="{{$post->url_song}}"><button type="button" class="btn p-2">{{$post->name_song}}</button></a></center>
        <img class="imagenAlbum rounded-circle" src="https://picsum.photos/200/300/?random" /><audio class="postAudio" src={{$post->image_album}} controls="controls" type="audio/mpeg" preload="none"></audio>
    </div >
    <div class="modal-footer footer">
        <p class="m-1">{{ $post->user->email}}</p> {{$post->created_at}} 
    </div>
</div>

        
    