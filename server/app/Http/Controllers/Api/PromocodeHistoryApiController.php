<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PromocodeHistoryResource;
use App\Models\PromocodeHistory;
use Illuminate\Http\Request;

/**
 * @group PromocodeHistory
 *
 * APIs for manage promocode history
 */
class PromocodeHistoryApiController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //new ItemManagementResource(ItemManagement::with(['sub_category', 'category', 'merchant'])->get());
        return new PromocodeHistoryResource(PromocodeHistory::with(['user','promocode'])->get());
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
        $promocodeHistory = PromocodeHistory::create($request->all());
        return $promocodeHistory;
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return new PromocodeHistoryResource(PromocodeHistory::with(['user','promocode'])->where('id',$id)->get());
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
        $promocodeHistory = PromocodeHistory::where('id',$id)->update($request->all());
        return $promocodeHistory;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PromocodeHistory::where('id',$id)->delete();
    }
}
