<form method="POST" action={{ route('savePost') }}>
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title" id="exampleModalCenterTitle">
                <input type="text" size="64" name="title" placeholder="Titulo" />
                <input type="hidden" size="64" name="userId" value={{ auth()->id() }}  />
                <input type="hidden" size="64" name="nameSong" value="{{$datos[0]}}"  />
                <input type="hidden" size="64" name="urlSpotify" value="{{$datos[1]}}"  />
                <input type="hidden" size="64" name="previewSong" value="{{$datos[2]}}"  />
            </div> 
        </div>
        <div class="modal-body">
            <center><h5><i class="fab fa-spotify fa-1x "></i> {{$datos[0]}}</h5></center>
            <textarea rows="5" cols="64" placeholder="Body" name="body" style="resize: none;"> </textarea>
        </div>
        <div >
            <span class="float-left m-3">{{ auth()->user()->email}}</span>
            <button type="button" class="btn btn-secondary m-2 float-right" data-dismiss="modal" onclick="history.back()">Close</button>
            <button type="submit" class="btn btn-primary m-2 float-right">Postear!</button>
        </div>
    </div>
</form>
    
