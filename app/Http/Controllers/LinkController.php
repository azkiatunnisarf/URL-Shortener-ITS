<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\LinkRepository;
use Redirect;

class LinkController extends Controller
{
    protected $LinkRepository;

    public function __construct(LinkRepository $LinkRepository)
    {
        $this->LinkRepository = $LinkRepository;
    }

    public function home()
    {
        return view('home');
    }

    public function notFound()
    {
        return view('notfound');
    }

    public function generateLink(Request $request)
    {
        $has_link = stristr($request->link_asli, 'http://') ?: stristr($request->link_asli, 'https://');
        if($has_link == TRUE || !empty($request->has( $request->all() )))
        {
            $link_pendek = $request->link_pendek;
            $link_asli = $request->link_asli;

            $cekLink = $this->LinkRepository->cekLink($link_pendek);
            if($cekLink == null){
                $this->LinkRepository->generate($link_pendek, $link_asli);
    
                $data = [
                    'link_asli' => $link_asli,
                    'link_pendek' => $link_pendek
                ];
    
                return view('components.berhasil')
                    ->with(compact('data'))
                    ->render();
            }
            else{
                return view('components.gagal')
                    ->render();
            }
        }
        else
        {
            return view('components.invalid')
                ->render();
        }
    }

    public function accessLink($link_pendek)
    {
        $cekLink = $this->LinkRepository->cekLink($link_pendek);

        if(is_null($cekLink) == 1){
            return redirect('/notfound');
        }
        else{
            $link_asli = $this->LinkRepository->gotoLink($link_pendek);
            return redirect()->to($link_asli);
        }
    }
}
