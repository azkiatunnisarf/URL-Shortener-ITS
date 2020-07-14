<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shortLink;

class ShortLinkController extends Controller
{
    public function home()
    {
        return view('home2');
    }

    public function notFound()
    {
        return view('notfound');
    }

    public function store(Request $request)
    {
        $request->validate([
           'link' => 'required|url',
           'code' => 'required'
        ]);

        $input['link'] = $request->link;
        $input['code'] = $request->code;

        shortLink::create($input);
        $shortLinks = shortLink::latest()->get();

        return view('components.berhasil', compact('shortLinks'));
         //    ->with('shortLink');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLink($code)
    {
        $find = shortLink::where('code', $code)->first();

        return redirect($find->link);
    }
}
