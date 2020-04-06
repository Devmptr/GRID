<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WallAudio;

class AudioController extends Controller
{
    //
    public function upload(Request $request){
        $audio = $request->audio_data->getClientOriginalName();
        $image->move(public_path('/audio/upload/'), $audio);
        $uploadaudio = WallAudio::create([
            'id_user' => $request->iduser,
            'Audio_path' => "/audio/upload/".$audio
        ]);

        if($uploadaudio->exists){
            return back()->with('status','upload berhasil');
        }
    }
}
