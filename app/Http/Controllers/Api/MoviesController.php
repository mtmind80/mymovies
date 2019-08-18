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

    /**
     * Function index
     * Returns all movies paginate results
     */
    public function index(Request $request)
    {
        $orderBy = $request->order_by ?? 'id';

        $movies = Movie::orderBy($orderBy)->paginate(10);

        return new MovieCollectionResource($movies);
    }

    /**
     * Function store
     * Params: $title,$format,$release_year,$rating,$length
     * Adds a new movie
     */
    public function store(MovieRequest $request)
    {
        Movie::create($request->all());

        return $this->_returnSuccess('Movie added.');
    }

    /**
     * Function show
     * Params: $id
     * Returns a single movie
     */
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

    /**
     * Function update
     * Params: $id, Request
     * Updates a movie
     */
    public function update(MovieRequest $request, $id)
    {
        if (!$movie = Movie::find($id)) {
            return $this->_returnError('Item not found.');
        }

        $movie->update($request->all());

        return $this->_returnSuccess('Movie updated.');
    }

    /**
     * Function destroy
     * Params: $id
     * Deletes a movie
     */
    public function destroy($id)
    {
        if (!$movie = Movie::find($id)) {
            return $this->_returnError('Item not found.');
        }

        $movie->delete();

        return $this->_returnSuccess('Movie deleted.');
    }

    /**
     * Function _returnError
     * Params: $message
     * Returns a formatted response
     */
    private function _returnError($message)
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
    private function _returnSuccess($message = null)
    {
        $response = ['status' => 'success'];

        if (!empty($message)) {
            $response['message'] = $message;
        }

        return response($response);
    }

    /**
     * Function searchTMDB
     * Params: Request title
     * Returns a list of movies from TMDB based on title (uses a 'like' search, and can return many movies
     */
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

        return response([
            'data'   => json_decode($response, true),
            'status' => 'success',
        ]);
    }

    /**
     * Function listTMDB
     * Params: Request ID
     * Returns a movie detail listing from TMDB based on id
     */
    public function listTMDB($id = null)
    {

        if (!$id) {
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

        return response([
            'data'   => json_decode($response, true),
            'status' => 'success',
        ]);

    }

}
