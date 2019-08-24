<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MyController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Function _returnError
     * Params: $message
     * Returns a formatted response
     */
    public function _returnError($message)
    {
        return response([
            'status' => 'error',
            'message' => $message,
        ]);
    }

    /**
     * Function _returnSuccess
     * Params: $message
     * Returns a formatted response
     */
    public function _returnSuccess($message = null)
    {
        $response = ['status' => 'success'];

        if (!empty($message)) {
            $response['message'] = $message;
        }

        return response($response);
    }

}
