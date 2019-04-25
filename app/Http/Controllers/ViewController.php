<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disk = Storage::files('public');
        $fileList = array();
        for($i = 1; $i < count($disk); $i++)
        {
            $temp = str_replace(".txt", '', $disk[$i]);
            $fileList[] = str_replace("public/", '', $temp);                
        }
        return view('view.view', compact('fileList'));
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
        $fileName = request('filename');
        $content = request('name') . "," . request('email') . "," .  request('dob') . "," . request('phone') . "," . request('gender') . "," . request('address'); 
        Storage::put('public/' . $fileName, $content);
        return route('view.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fileName = $id . '.txt';
        $string = File::get(public_path('storage/' . $fileName));
        $arr = explode(',', $string);
        $arr['filename'] = $fileName;
        return view('view.update', compact('arr')); 
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
