<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;

use App\Movie;
use App\Http\Resources\MovieResource;
use App\Http\Resources\MovieCollectionResource;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
        $orderBy = $request->order_by ?? 'id';

        $movies = Movie::orderBy($orderBy)->paginate(10);

        return new MovieCollectionResource($movies);
    }

    public function store(MovieRequest $request)
    {
        Movie::create($request->all());

        return $this->_returnSuccess('Movie added.');
    }

    public function show($id)
    {
        if (!$movie = Movie::find($id)) {
            return $this->_returnError('Item not found.');
        }

        return response([
            'data'   => new MovieResource($movie),
            'status' => 'success',
        ]);
    }

    public function update(MovieRequest $request, $id)
    {
        if (!$movie = Movie::find($id)) {
            return $this->_returnError('Item not found.');
        }

        $movie->update($request->all());

        return $this->_returnSuccess('Movie updated.');
    }

    public function destroy($id)
    {
        if (!$movie = Movie::find($id)) {
            return $this->_returnError('Item not found.');
        }

        $movie->delete();

        return $this->_returnSuccess('Movie deleted.');
    }

    private function _returnError($message)
    {
        return response([
            'status'  => 'error',
            'message' => $message,
        ]);
    }

    private function _returnSuccess($message = null)
    {
        $response = ['status' => 'success'];

        if (!empty($message)) {
            $response['message'] = $message;
        }

        return response($response);
    }

}
