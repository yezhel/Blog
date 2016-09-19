<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\category;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests;
//use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = article::orderBy('id','ASC')->paginate(10);
        $categories = category::get();
        return view('admin.articles.index')->with('articles',$articles)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::lists('name','id');
        $categories = category::lists('name','id');
        return view('admin.articles.create')->with('users',$users)->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return dd($request);
        $article = new article($request->all());
        /*$article = article::create([
                'title'=>$request->title,
                'category_id'=>$request->category_id,
                'content'=>$request->content,
                'user_id'=>$request->user_id,
            ]);*/
        $article->save();

        Flash::success("Se ha registrado el articulo " . $article->title . " de forma exitosa");
        return redirect()->route('admin.articles.index');
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
        $article = article::find($id);
        $users = User::get();
        $categories = category::get();
        return view('admin.articles.edit')->with('article',$article)->with('users',$users)->with('categories',$categories);
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
        $article = article::find($id);
        $article->fill($request->all());
        $article->save();

        Flash::warning('El usuario ' .$article->title .' ha Sido editado con exito!');
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = article::find($id);
        $article->delete();

        Flash::error("El articulo " . $article->name .' a sido borrado de forma exitosa!');
        return redirect()->route('admin.articles.index');
    }
}
