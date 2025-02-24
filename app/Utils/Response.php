<?php

namespace App\Utils;

class Response
{
    public static function success($data)
    {
        return response()->json([
            'status' => 200,
            'ack' => 'success',
            'response' => $data
        ]);
    }

    public static function error($data)
    {
        return response()->json([
            'status' => 500,
            'ack' => 'error',
            'response' => $data
        ]);
    }

    public static function duplicate($data)
    {
        return response()->json([
            'status' => 409,
            'ack' => 'duplicate',
            'response' => $data
        ]);
    }
}
