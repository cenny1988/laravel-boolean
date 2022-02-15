<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class GuestController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function createPostcard()
    {
        return view('pages.create-postcard');
    }

    public function storePostcard(Request $request)
    {
        $data = $request -> validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'text' => 'string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);
        // $data = $request -> all();

        $imageFile = $data['image'];
        $imageName = rand(100000, 999999) . '_' . time() . '.' . $imageFile->getClientOriginalExtension();
        
        $imageFile -> storeAs('/postcards/', $imageName, 'public');
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect()->route('home');
        
    }
}
