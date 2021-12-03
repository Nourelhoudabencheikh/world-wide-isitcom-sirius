<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\victimes;


class victimescontroller extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $victimes = victimes::latest()->paginate(5);
    
        return view('index',compact('victimes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'nom'=> 'required',
            'prenom'=> 'required',
            'age'=> 'required',
            'etat'=> 'required',
           'datedesauvetage'=> 'required',
        ]);
    
        victimes::create($request->all());
     
        return redirect()->route('victimes.index')
                        ->with('success','victimes created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\victimes  $victimes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $victimes = victimes::find($id);

        return view('show',compact('victimes'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\victimes  $victimes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $victimes = victimes::find($id);
        return view('edit',compact('victimes'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\victimes  $victimes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $victimes = victimes::find($id);
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'age'=> 'required',
            'etat'=> 'required',
           'datedesauvetage'=> 'required',
        ]);
    
        $victimes->update($request->all());
    
        return redirect()->route('victimes.index')
                        ->with('success','victimes updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\victimes  $victimes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $victimes = victimes::find($id);
        $victimes->delete();
    
        return redirect()->route('victimes.index')
                        ->with('success','victimes deleted successfully');
    }
}
