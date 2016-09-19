<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\article;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = image::orderBy('id','ASC')->paginate(8);
        $articles = article::get();
        return view('admin.images.index')->with('images',$images)->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = article::lists('title','id');
        return view('admin.images.create')->with('articles',$articles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new image($request->all());
        $image->save();

        Flash::success("Se ha registrado la imagen " . $image->name . " de forma exitosa");
        return redirect()->route('admin.images.index');
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
        $image = image::find($id);
        $articles = article::get();
        return view('admin.images.edit')->with('image',$image)->with('articles',$articles);
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
        $image = image::find($id);
        $image->fill($request->all());
        $image->save();

        Flash::warning('La imagen ' .$image->name .' ha Sido editado con exito!');
        return redirect()->route('admin.images.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = image::find($id);
        $image->delete();

        Flash::error("La Imagen " . $image->name .' a sido borrado de forma exitosa!');
        return redirect()->route('admin.images.index');
    }
}
