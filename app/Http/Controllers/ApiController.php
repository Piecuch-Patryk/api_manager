<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;
use App\Http\Requests\ApiCreateRequest;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.api.index', [
            'listings' => Api::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.api.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiCreateRequest $request)
    {
        $data = $request->validated();
        Api::create($data);

        return to_route('api.index')->with('message', 'New API created suucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Api::find($id);
        return view('auth.api.edit', [
            'listing' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ApiCreateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApiCreateRequest $request, $id)
    {
        $data = $request->validated();
        Api::where('id', $id)->update($data);

        return to_route('api.index')->with('message', $data['api-name'] . ' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $apiName = Api::find($id)->value('api-name');
        Api::destroy($id);
        return to_route('api.index')->with('message', $apiName . ' deleted successfully!');
    }
}
