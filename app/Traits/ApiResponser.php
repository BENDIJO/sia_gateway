<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{
    //BUILD SUCCESS RESPONSER
    //SUCCESS RESPONSER
    public function successReponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }
    public function validResponse()
    {
        return response()->json(['data' => $data], $code);
    }
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code'=> $code],$code);
    }
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content Type', 'application/json');
    }
}