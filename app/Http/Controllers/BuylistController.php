<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class BuylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("buylist.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Card::updateOrCreate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input('cardListText');
        // Clean string by removing all \r and trimming white space
        // Then convert string to array
        $select = array_map('trim', explode("\n", str_replace("\r", "", $input)));
                
        // Group By Solution
        
        $columns=['Name', 'Set', 'Condition', 'Finish', 'Source', 'Price'];
        $cards=Card::select($columns)->whereIn('Name', $select)->orderBy("Price", 'DESC')->get();
        $groupedCards=$cards->groupBy('Name');  //consider removing the names after the groupby

        return view('buylist.store')->with('cards', $groupedCards);
        

        // Multiple Query Method (Probably better with Fetch API)
        /*
        $columns=['Set', 'Condition', 'Finish', 'Source', 'Price'];
        $cards=[];
        foreach ($select as $name){
            $cards[$name]=Card::select($columns)->where("Name", $name)->get();
        }
        return view('buylist.store')->with('cards', $cards);
        */
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
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
