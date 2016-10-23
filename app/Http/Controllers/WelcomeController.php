<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login_id = Session::get('login_id');
      
        $header=view('pages.menu');
        $content=view('pages.content');
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('main_content',$content)
                             ->with('header',$header)
                             ->with('login_id',$login_id)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
    }
    
     public function contact_page()
    {
        $header=view('pages.menu');
        $contact=view('pages.contact');
        $top_footer=view('pages.top_footer');
        $footer=view('pages.footer');
        return view('master')->with('contact',$contact)
                             ->with('header',$header)
                             ->with('top_footer',$top_footer)
                             ->with('footer',$footer);
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
        //
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
