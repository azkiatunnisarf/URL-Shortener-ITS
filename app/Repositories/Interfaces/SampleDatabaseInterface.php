<?php

namespace App\Repositories\Interfaces;

interface SampleDatabaseInterface
{
    public function create(array $data);
    public function read();
    public function update(int $id, array $data);
    public function delete(int $id);
}

?>