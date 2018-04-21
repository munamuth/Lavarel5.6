<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    private $location;
    public function __construct(Province $location)
    {
        $this->location = $location;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
                'name' => $request->name , 
                'parent' => $request->parent , 
            );
        $insert = $this->location->insert($data);
        if( $insert )
        {
            $request->session()->flash('status', 'Success!!!');
        }
        else
        {
            $request->session()->flash('status', 'Failed!!!');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        
    }

    public function getSubByParent($parent)
    {
        $sub = $this->location->where('parent', $parent)->get();
        if( !empty($sub))
        {
            return Response()->json([
                'STATUS' => true,
                'DATA' => $sub,
            ], 200);
        }
        else
        {
            return Response()->json([
                'STATUS' => false,
                'CODE' => 404,
            ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        //
    }
}
