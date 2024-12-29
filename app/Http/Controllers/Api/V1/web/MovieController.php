<?php

namespace App\Http\Controllers\Api\V1\web;
use App\Models\Movie;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $data = Movie::all();
        return $this->successResponse($data);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

}
