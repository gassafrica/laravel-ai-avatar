<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;
class AvatarController extends Controller

{
    public function update(UpdateAvatarRequest $request)
    {    
        $path = Storage::disk('public')->put('avatars',$request->file('avatar'));
      // $path = $request->file('avatar')->store('avatars','public');
     

       if ($OldAvatar = $request->user()->avatar){
        Storage::disk('public')->delete($OldAvatar);
       }

       auth()->user()->update(['avatar' => $path]);

        // Store the avatar

        return redirect(route('profile.edit'))->with('message', 'Successfully updated');
    }

    public function generate(Request $request) 
    {
        $result = OpenAI::images()->create([
            "prompt"=>"create an animated avatar for this user",
             'n' => 1,
             "size" => "256x256",
         
         
             ]);
         
         

        $contents = file_get_contents($result->data[0]->url);
         

        $filename = Str::random(25);

        
       if ($OldAvatar = $request->user()->avatar){
        Storage::disk('public')->delete($OldAvatar);
       }
       Storage :: disk('public')->put("avatars/$filename.jpg", $contents);

        auth()->user()->update(['avatar' => "avatars/$filename.jpg"]);
        return redirect(route('profile.edit'))->with('message', 'Successfully updated');


    }
    }


