<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        Article::create($data);
        return redirect(route('article.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles = Article::find($id);
        return view('article.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articles = Article::find($id);
        return view('article.edit', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $articles = Article::find($id);
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        $articles->update($data);
        return redirect(route('article.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articles = Article::find($id);
        $articles->delete();
        return redirect(route('article.index'));
    }
}
