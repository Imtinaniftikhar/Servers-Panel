<?php

namespace App\Http\Controllers;
use App\Models\Platform;
use Illuminate\Http\Request;


class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Platform::latest()->paginate(5);
  
        return view('platforms.index',compact('platforms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('platforms.create');
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
            'title' => 'required',
            
        ]);
  
        Platform::create($request->all());
   
        return redirect()->route('platforms.index')
                        ->with('success','platforms created successfully.');
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
    public function edit(Platform $platform)
    {
        return view('platforms.edit',compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform $platform)
    {
        $request->validate([
            'title' => 'required',
            
        ]);
  
        $platform->update($request->all());
  
        return redirect()->route('platforms.index')
                        ->with('success','platforms updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();
  
        return redirect()->route('platforms.index')
                        ->with('success','platforms deleted successfully');
    }
}
