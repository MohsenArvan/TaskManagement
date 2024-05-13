<?php

namespace App\Services;

use App\Http\Requests\StoreBoardRequest;
use App\Repositories\Board\BoardInterface;

class BoardServices
{
    /**
     * Create a new class instance.
     */
    protected $requestData;

    public function StoreBoard(StoreBoardRequest $request)
    {
        $data = $request->input();
        $data['user_id'] = auth()->user()->id;

        return app(BoardInterface::class)->create($data);
    }

}
