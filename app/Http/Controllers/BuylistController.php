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
        $columns=['Name', 'Set', 'Condition', 'Finish', 'Source', 'Price'];
        // Code for file upload
        if ($id=='file-submit'){
            
            // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
            $request->validate([
                'cardListFile' => 'required|mimes:csv|max:2048',
            ]);
            
            $file = $request->file('cardListFile');
            $select = $this->csvToArray($file);
            // More validation is needed to make sure the headers are formatted correctly
            $header=array_keys($select[0]);

            // Hardcode [0] for the header, assuming file is formated properly. Add validation later
            $cards=Card::select($columns);

            foreach ($header as $key){
                $cards=$cards->whereIn($key, array_column($select, $key));
            }
            $groupedCards=$cards->orderBy('Price', 'DESC')->get()->groupBy('Name');
            
            // fix return
            return  view('buylist.store')->with('cards', $groupedCards);
        }
        // Text Submission 
        if ($id=='text-submit'){
            $input = $request->input('cardListText');
            // Clean string by removing all \r and trimming white space
            // Then convert string to array
            $select = array_map('trim', explode("\n", str_replace("\r", "", $input)));
                    
            // Group By Solution
            $cards=Card::select($columns)->whereIn('Name', $select)->orderBy("Price", 'DESC')->get();
            $groupedCards=$cards->groupBy('Name');  //consider removing the names after the groupby

            return view('buylist.store')->with('cards', $cards);
        }
        // If something goes wrong
        return redirect('/buylist');
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

    function csvToArray($filename = '', $delimiter = ',')
    {
    // Taken from: https://stackoverflow.com/questions/35220048/import-csv-file-to-laravel-controller-and-insert-data-to-two-tables
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
    }
}
