<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MyController;

use App\Director;
use Illuminate\Http\Request;
use App\Http\Requests\DirectorRequest;
use App\Http\Resources\DirectorResource;
use App\Http\Resources\DirectorCollectionResource;

class DirectorsController extends MyController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $orderBy = $request->order_by ?? 'id';

        $directors = Director::orderBy($orderBy)->paginate(10);

        return new DirectorCollectionResource($directors);

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Director::create($request->all());
        return $this->_returnSuccess('Director added.');
    }

    /**
     * Function show
     * Params: $id
     * Returns a single director
     */
    public function show($id)
    {
        if (!$director = Director::find($id)) {
            return $this->_returnError('Item not found.');
        }

        return response([
            'data' => new DirectorResource($director),
            'status' => 'success',
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function update(DirectorRequest $request, $id)
    {
        if (!$director = Director::find($id)) {
            return $this->_returnError('Item not found.');
        }

        $director->update($request->all());

        return $this->_returnSuccess('Director updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$director = Director::find($id)) {
            return $this->_returnError('Item not found.');
        }

        $director->delete();

        return $this->_returnSuccess('Director deleted.');
    }
}
