<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PromocodeResource;
use App\Models\Promocode;
use Illuminate\Http\Request;

class PromocodeApiController extends Controller
{
    public function index()
    {
        //
        //new ItemManagementResource(ItemManagement::with(['sub_category', 'category', 'merchant'])->get());
        return new PromocodeResource(Promocode::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $promocode = Promocode::create($request->all());
        return $promocode;
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return new PromocodeResource(Promocode::all());
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $promocode = Promocode::where('id',$id)->update($request->all());
        return $promocode;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promocode::where('id',$id)->delete();
    }
}
