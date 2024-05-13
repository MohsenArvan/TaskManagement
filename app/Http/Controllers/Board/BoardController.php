<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBoardRequest;
use App\Repositories\Board\BoardInterface;
use App\Services\BoardServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BoardController extends Controller
{
    // protected $boardInterface;
    // protected $boardService;

    // public function __construct(BoardInterface $boardInterface, BoardServices $boardService)
    // {
    //     $this->boardInterface = $boardInterface; 
    //     $this->boardService = $boardService;       
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoardRequest $request)
    {
        // dd($request->all());
        app(BoardServices::class)->StoreBoard($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
