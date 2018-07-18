<?php

namespace Dealer\Http\Controllers;


use App\Http\Controllers\Controller;

use Dealer\Models\Dealer;

use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Dealer::all();
        //$items = ['test'];
        return view('dealer::index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dealer::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'companyname' 	=> 'required',
            'addressline1' 	=> 'required',
            'addressline2' 	=> 'required'
        ]);

        $input = $request->all();

        Dealer::create($input);

        session()->flash('flash_message', 'dealer successfully added!');

        //TODO: redirect to company list page
        return redirect()->route('dealer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Dealer $dealer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Dealer::find($id);
        return view('dealer::edit')->withitems($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Dealer::find($id);

        $this->validate($request, [
            'companyname' 	=> 'required',
            'addressline1' 	=> 'required',
            'addressline2' 	=> 'required'
        ]);

        $input = $request->all();

        $item->fill($input)->save();

        session()->flash('flash_message', 'dealer successfully updated!');

        return redirect()->route('dealer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dealer::find($id);

        $item->delete();

        session()->flash('flash_message', 'dealer successfully deleted!');

        return redirect()->route('dealer.index');
    }
}