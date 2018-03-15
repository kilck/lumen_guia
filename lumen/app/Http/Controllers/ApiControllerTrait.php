<?php

namespace App\Http\Controllers;
trait ApiControllerTrait
{
    public function index()
    {
        $reseults = $this->model->paginate();
        return response()->json($reseults);
    }
}