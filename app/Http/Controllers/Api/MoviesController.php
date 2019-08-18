<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Movie;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Http\Resources\MovieResource;
use GuzzleHttp\Exception\ClientException;
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
            'data' => new MovieResource($movie),
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
            'status' => 'error',
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

    public function searchTMDB(Request $request)
    {

        $title = $request->title ?? '';
        if ($title == '') {
            return $this->_returnError('Item not found.');
        }
        $client = new Client();
        try {
            $request = $client->get('https://api.themoviedb.org/3/search/movie?api_key=b721f2ca9b95f92c5e1a2cfb9a018552&query=' . $title,
                ['verify' => false]);
        } catch (ClientException $e) {
            return $this->_returnError('Problem with external connection.');
        }

        $response = $request->getBody()->getContents();

        return response($response)->header('Content-Type', 'application/json');
    }


    public function listTMDB(Request $request)
    {

        $id = $request->id ?? 0;
        if ($id == 0) {
            return $this->_returnError('Item not found.');
        }
        $client = new Client();
        try {
            $request = $client->get('https://api.themoviedb.org/3/movie/' . $id . '?api_key=b721f2ca9b95f92c5e1a2cfb9a018552',
                ['verify' => false]);
        } catch (ClientException $e) {
            return $this->_returnError('Problem with external connection.');
        }

        //@todo display image $imageurl = "https://image.tmdb.org/t/p/w500/";

        $response = $request->getBody()->getContents();

        return response($response)->header('Content-Type', 'application/json');
    }

}
