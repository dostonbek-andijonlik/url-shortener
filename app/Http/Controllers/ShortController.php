<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function short(ShortUrl $request)
    {
        if ($request->original_url) {
            $newUrl = ShortUrl::create([
                'original_url' => $request->original_url
            ]);
            if ($newUrl) {
                $short_url = base_convert($newUrl->id, 10, 36);
                $newUrl->update([
                    'short_url' => $short_url
                ]);
                return redirect()->back()->with('success_message','Your Short url:  <a href="'. url($short_url) . '">'. url($short_url).'</a> ') ; 
            }
        }
        return back();
    }

    public function show($code)
    {
        dd($code);
    }
}
