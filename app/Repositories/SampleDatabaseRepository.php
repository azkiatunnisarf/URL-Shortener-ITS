<?php

namespace App\Repositories;
use App\Repositories\Interfaces\SampleDatabaseInterface;
use App\Models\SampleDatabase;

class SampleDatabaseRepository implements SampleDatabaseInterface
{
    protected $model;

    public function __construct(SampleDatabase $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function read()
    {
        return $this->model->all();
    }

    public function update(int $id,array $data)
    {
        return $this->model->find($id)->update($data);  
    } 

    public function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }
}
?>