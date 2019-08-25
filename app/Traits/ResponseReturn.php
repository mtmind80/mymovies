<?php
namespace App\Traits;

trait ResponseReturn
{
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