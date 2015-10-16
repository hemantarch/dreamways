<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Suggestion;

class FrontendController extends Controller
{
    /**
     * Display a Home page
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('frontend.home');
    }


    /**
     * Display a Home page
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('frontend.dashboard');
    }


    /**
     * Display a about us
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('frontend.about-who-we-are');
    }


    /**
     * Display a contact us
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('frontend.about-contact');
    }


    /**
     * Display a prodile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('frontend.profile');
    }


    /**
     * Display a itinerary
     *
     * @return \Illuminate\Http\Response
     */
    public function itinerary()
    {
        return view('frontend.itinerary');
    }   

    /**
     * Display a Suggestion page
     *
     * @return \Illuminate\Http\Response
     */
    public function getSuggestion()
    {
        return view('frontend.suggestion');
    }


    /**
     * Display a Suggestion page
     *
     * @return \Illuminate\Http\Response
     */
    public function postSuggestion(Request $request)
    {
        $suggestion = new Suggestion;
        $suggestion->name = $request->name;
        $suggestion->description = $request->description;
        $suggestion->country = $request->country;
        $suggestion->state = $request->state;
        $suggestion->city = $request->city;
        $suggestion->formatted_address = $request->formatted_address;
        $suggestion->lat = $request->latitude;
        $suggestion->lang = $request->longitude;
        $suggestion->save();
        return redirect()->back()->with('status','Your Suggestion is added successfully, will be live soon.');
    }   






    /**
     * Display a search
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('frontend.search_result');
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
