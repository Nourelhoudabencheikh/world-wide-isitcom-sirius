<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sauveteurs;

class sauveteurscontroller extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sauveteurs = sauveteurs::latest()->paginate(5);
    
        return view('indexsauveteurs',compact('sauveteurs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createsauveteurs');
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
           'datedenaissance'=> 'required',
        ]);
    
        sauveteurs::create($request->all());
     
        return redirect()->route('sauveteurs.index')
                        ->with('success','sauveteurs created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\sauveteurs  $sauveteurs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sauveteurs = sauveteurs::find($id);

        return view('showsauveteurs',compact('sauveteurs'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sauveteurs  $sauveteurs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sauveteurs = sauveteurs::find($id);
        return view('editsauveteurs',compact('sauveteurs'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sauveteurs  $sauveteurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sauveteurs = sauveteurs::find($id);
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'age'=> 'required',
            'datedenaissance'=> 'required',
        ]);
    
        $sauveteurs->update($request->all());
    
        return redirect()->route('sauveteurs.index')
                        ->with('success','sauveteurs updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sauveteurs  $sauveteurs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sauveteurs = sauveteurs::find($id);
        $sauveteurs->delete();
    
        return redirect()->route('sauveteurs.index')
                        ->with('success','sauveteurs deleted successfully');
    }
}
