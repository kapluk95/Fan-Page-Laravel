<?php
namespace App\Http\Controllers;
use App\Reposts;
use Illuminate\Http\Request;
class ModalController extends Controller
{

    public function savePost(Request $request)
    {
    $title =$_POST['title'];
    $body =$_POST['body'];
    $nameSong=$_POST['nameSong'];
    $url_song =$_POST['urlSpotify'];
    $preview_song=$_POST['previewSong'];
    $user_id =$_POST['userId'];
    $repost = new Reposts;
    $repost->title = $title;
    $repost->body = $body;
    $repost->user_id = $user_id;
    $repost->name_song = $nameSong;
    $repost->url_song = $url_song;
    $repost->image_album = $preview_song;

    $repost->save(); 

    return redirect('home');
    }
}
