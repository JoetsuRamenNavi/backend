<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allarticle = Article::All();
        return $this->jsonResponse($allarticle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->id = 0;
        $article->title = $request->title;
        $article->date = $request->date;
        $article->post = $request->post;
        $article->store_id = $request->store_id;
        //timestampの無効
        $article->timestamps = false;

        $article->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articleshow = Article::where('store_id',$id)->orderBy('date','desc')->get();
        //return $this->jsonResponse($articleshow);
        return $this->jsonResponse($articleshow);
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
