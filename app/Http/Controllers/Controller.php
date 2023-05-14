<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Delete resource response
     * @return json
     */
    protected function deletedResponse()
    {
        return $this->response(1, [], [], '', 204);
    }

    /**
     * Resource response
     * @param  array $data
     * @param  array  $headers
     * @return json
     */
    protected function response($success = 1, $data = [], $meta = [], $message = "", $statusCode = 200, $headers = [])
    {
    	$dataResponse = ['success' => $success, 'data' => $data];
        if ($meta) {
            $dataResponse['meta'] =  $meta;
        }
        $dataResponse['message'] =  $message;
        return response()->json($dataResponse, $statusCode, $headers);
    }

    /**
     * Resource response
     * @param  array $data
     * @param  array  $headers
     * @return json
     */
    protected function responsePaginator($success = 1, $data = [], $message = "", $statusCode = 200, $headers = [])
    {
        $dataResponse = array_merge(['success' => $success], $data, ['message' => $message]);
        return response()->json($dataResponse, $statusCode, $headers);
    }
}
