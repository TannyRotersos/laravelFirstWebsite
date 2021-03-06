<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\qualities;
use Carbon\Carbon;
use App\Crush;

class QualitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
       
  

         $qualities = new qualities();
        $crushes = Crush::all()->where('id', $id);

        return view('crushes.add', array(   'crushes' =>$crushes,
                                            'qualities'=>$qualities,
                                            'action'=>route('qualities.store'), 
                                            'submit_text'=>"Add Qualities"));

         
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crushes = Crush::all()->where('id', $id);
        $qualities = qualities::all()->where('id2', $id);


    return view ('crushes.profile', array('crushes' =>$crushes,
                                        'qualities' =>$qualities));


    

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
        $qual =qualities::find($id);
        $qual->delete();

        return redirect()->back();
    }
    

     public function store(Request $request)
    {
        $qualities=new qualities();
        $this->setAndSavequalitiesData($qualities, $request);

        return redirect()->route('crushes.index');
    }
 public function setAndSavequalitiesData($qualities, $request)
    {
        $qualities->qualities = $request->qualities;
        $qualities->id2 = $request->id2;
        
        $qualities->save();

    }

  

}
