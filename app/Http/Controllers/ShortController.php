<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function short(Request $request)
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

                return back();
            }
        }
        return back();
    }
}
