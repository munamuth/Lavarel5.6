<?php

namespace App\Http\Controllers;

use App\Property_Type;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    private $type;
    public function __construct(property_Type $type)
    {
        $this->type = $type;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.utility');
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
                'name' => $request->name,
                'status_id' => $request->status,
            );
        $insert = $this->type->insert($data);
        if($insert)
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
     * @param  \App\Property_Type  $property_Type
     * @return \Illuminate\Http\Response
     */
    public function show(Property_Type $property_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property_Type  $property_Type
     * @return \Illuminate\Http\Response
     */
    public function edit(Property_Type $property_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property_Type  $property_Type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property_Type $property_Type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property_Type  $property_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property_Type $property_Type)
    {
        //
    }
}
