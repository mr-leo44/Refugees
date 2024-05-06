<?php

namespace App\Http\Controllers\Admin;

use App\Models\Asile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AsileResource;
use App\Http\Requests\StoreAsileRequest;

class AsileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asiles = AsileResource::collection(Asile::all());
        return view('admin.asiles.index', compact('asiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsileRequest $request)
    {
        Asile::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'from' => $request->from,
            'to' => $request->to,
        ]);

        return to_route('admin.asiles.index')->with('success', 'Request for Asylum maked sucessfully');
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
    public function edit(Asile $asile)
    {
        return view('admin.asiles.edit', compact('asile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAsileRequest $request, Asile $asile)
    {
        $asile->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'from' => $request->from,
            'to' => $request->to,
        ]);

        return to_route('admin.asiles.index')->with('success', 'Request for Asylum updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asile $asile)
    {
        $asile->delete();

        return to_route('admin.asiles.index')->with('success', 'Request for Asylum deleted sucessfully');
    }
}
