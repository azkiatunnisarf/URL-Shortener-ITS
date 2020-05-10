<?php

namespace App\Repositories;
use App\Repositories\Interfaces\LinkInterface;
use App\Models\Link;

class LinkRepository implements LinkInterface
{
    protected $model;

    public function __construct(Link $model)
    {
        $this->model = $model;
    }

    public function generate($link_pendek, $link_asli)
    {
        return $this->model->create([
            'link_pendek' => $link_pendek,
            'link_asli' => $link_asli
        ]);
    }

    public function cekLink($link_pendek)
    {
        return $this->model->where('link_pendek', $link_pendek)->first();
    }

    public function gotoLink($link_pendek)
    {
        return $this->model->where('link_pendek', $link_pendek)->first()->link_asli;
    }
}
?>