<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SampleDatabaseRepository;
use Response;

class SampleDatabaseController extends Controller
{
    protected $repository;

    public function __construct(SampleDatabaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(Request $request)
    {
        $this->repository->create($request->all());

        $status = [
            'STATUS' => 'OK'
        ];

        return Response::json($status);
    }

    public function read()
    {
        $getAll = $this->repository->read();

        $data = [
            'sampledatabase' => $getAll
        ];

        return Response::json($data);
    }

    public function update($id, Request $request)
    {
        $this->repository->update($id ,$request->all());

        $status = [
            'STATUS' => 'OK'
        ];

        return Response::json($status);
    }

    public function delete($id)
    {
        $this->repository->delete($id);

        $status = [
            'STATUS' => 'OK'
        ];

        return Response::json($status);
    }
}
