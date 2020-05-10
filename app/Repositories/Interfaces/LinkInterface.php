<?php

namespace App\Repositories\Interfaces;

interface LinkInterface
{
    public function generate($link_pendek, $link_asli);
    public function cekLink($link_pendek);
    public function gotoLink($link_pendek);
}

?>