<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestNumberRequest;
use App\Models\RequestNumber;
use Illuminate\Http\Request;

class RequestPhoneController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestNumberRequest $request)
    {
        if (RequestNumber::create([
            'phone' => $request->phone,
            'zone_prefix_id' => $request->zone_prefix_id
        ])){
            return response()->json([
                'message' => 'Success'
            ]);
        }else{
            return response()->json([
                'message' => 'Error'
            ], 500);
        }
    }

}
