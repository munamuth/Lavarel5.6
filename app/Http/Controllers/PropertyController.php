<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use App\Property_type;
class PropertyController extends Controller
{
    private $property, $type;

    public function __construct(Property $property, Property_type $type)
    {
        $this->property = $property;
        $this->type = $type;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = $this->property->get();
        $types = $this->type->get();
        return view('admin.property', compact('types', 'property'));
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
                'type_id' => $request->type,
                'price' => $request->price,
                'location' => $request->location,
                'descr' => $request->descr,
                'user_id' => 1,
                'status_id' => 1,
            );
        $save = $this->property->insert( $data );
        if( $save )
        {
            $request->session()->flash('status', 'Success');
        }
        else 
        {
            $request->session()->flash('status', 'Failed');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
