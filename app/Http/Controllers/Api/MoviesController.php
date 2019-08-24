<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MyController;

use Log;
use App\Movie;
use App\Director;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Http\Resources\MovieResource;
use GuzzleHttp\Exception\ClientException;
use App\Http\Resources\MovieCollectionResource;


class MoviesController extends MyController
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
     * Function searchTMDB
     * Params: Request title
     * Returns a list of movies from TMDB based on title (uses a 'like' search, and can return many movies
     */
    public function searchTMDB(Request $request)
    {
        $api_key = env('TMDB_API_KEY');
        $api_url = env('TMDB_API_URL');

        $title = $request->title ?? '';
        if ($title == '') {
            return $this->_returnError('Item not found.');
        }
        $client = new Client();
        try {
            $request = $client->get($api_url .'search/movie?api_key='.$api_key .'&query=' . $title,
                ['verify' => false]);
        } catch (ClientException $e) {
            return $this->_returnError('Problem with external connection.');
        }

        $response = $request->getBody()->getContents();

        $TMDBimageUrl ='https://image.tmdb.org/t/p/w500/';
        $results = (json_decode($response, true));
        for ($x = 1; $x <= count($results['results']) -1; $x++) {
            $results['results'][$x]['poster_path'] = $TMDBimageUrl . $results['results'][$x]['poster_path'];
        }
        return response([
            'data'   => $results,
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

        $api_key = env('TMDB_API_KEY');
        $api_url = env('TMDB_API_URL');

        $client = new Client();
        try {
            $request = $client->get($api_url .'movie/' . $id . '?api_key='. $api_key,
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

    public function director($id,$director_id = null) {

        if (!$movie = Movie::find($id)) {
            return $this->_returnError('Item not found.');
        }

        if($director_id) {
            try {
                // run your code here
                if ($director = Director::find($director_id)) {
                    $movie->director()->attach($director_id);
                }
            }
            catch (exception $e) {
                Log::error($e);
            }
            finally {
                //optional code that always runs
            }
        }

    }




    public function destroydirector($id,$director_id = null) {

        if (!$movie = Movie::find($id)) {
            return $this->_returnError('Item not found.');
        }

        if($director_id) {
            try {
                if ($director = Director::find($director_id)) {
                    $movie->director()->detach($director_id);
                }
            }
            catch (exception $e) {
                Log::error($e);
            }
            finally {
                //optional code that always runs
            }
        }

    }

}
