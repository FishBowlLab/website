<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Mail\WelcomeMail;
//use App\Models\MailingList;
//use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
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
        /*
        // This method needs to be protected
        $this->validate($request, [
            "email" => "required|unique:mailing_list,email",
        ]);
        $email = $request->input("email");
        
        if(MailingList::where("email", $email)->count() >0 ){
            return redirect('/')->with("error", "You have already signed up");
        }

        // Default Case
        $mailingList = MailingList::create([
                    "email" => $email,
        ]);

        // Email signup and validation
        Mail::to($email)->send(new WelcomeMail());
        if(Mail::failures()){
            return redirect("/")->with("error", "Sorry! Please try again later");
        }

        return redirect("/")->with("success", "You have successfully signed up");   
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
