<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class AlbumsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function showAlbums(){  
    $client = new Client([
      'base_uri' => 'http://localhost:3001/api/',
      'timeout'  => 2.0,
    ]);
    $response = $client->request('GET', 'albums');
    $albums = json_decode($response->getBody()->getContents());
    $todo= $albums[0]->items;
    return view('albumView',compact('todo')); 
  }  

  public function showSongs($idAlbum) {  
    $client = new Client([
      'base_uri' => 'http://localhost:3001/api/albums/',
      'timeout'  => 2.0,
    ]);
    switch ($idAlbum) {
      case  "43otFXrY0bgaq5fB3GrZj6":
      $discNumber= 0; 
        break;
      case  "5wZtSIvijWCMc1vlPFqAyB":
        $discNumber= 1;  
        break;
      case  "7xl50xr9NDkd3i2kBbzsNZ":
        $discNumber= 2;  
        break;
      case  "1jWKVgnHX8nwR551hQNx5K":
        $discNumber= 3;  
        break;
      case  "6deiaArbeoqp1xPEGdEKp1":
        $discNumber= 4;  
        break;
      case  "0fLhefnjlIV3pGNF9Wo8CD":
        $discNumber= 5;  
        break;
      case  "2Y9IRtehByVkegoD7TcLfi":
        $discNumber= 6;  
        break;
      case  "74cQBDmkkzRBntR064f0SD":
        $discNumber= 7;  
        break;
      case  "2rQ135imvelvp89D8eEZOi":
        $discNumber= 8;  
        break;
      case  "30Perjew8HyGkdSmqguYyg":
        $discNumber= 9;  
        break;
      case  "1oOkcBu5bgkUzZTvKD1m8z":
        $discNumber= 10;  
        break;
      case  "3rHJQrfEcBeSaLPuLwKR6F":
        $discNumber= 11;  
        break;
      case  "10Oqhoq2akSJnurJOPk8xT":
        $discNumber= 12;  
        break;
    }
    $response = $client->request('GET', 'tracks');
      
    $tracks = json_decode($response->getBody()->getContents());
    
    $canciones=$tracks[$discNumber]->items;
    return view('songsView',compact('canciones'));
  }  
    
}
