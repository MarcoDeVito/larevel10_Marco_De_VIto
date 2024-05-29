<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(2);
        return view('articles.index', compact('articles'));
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {


        $path_image = '';
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            //$path_image = $request->file('image')->store('public/images');
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }
        Article::create([
            'title' => $request->title,
            'author_name' => $request->author_name,
            'author_surname' => $request->author_surname,
            'category' => $request->category,
            'text' => $request->text,
            'image' =>  $path_image

        ]);
        session()->flash('success', 'Articolo Creato con successo');
        return redirect()->route('articles.index');
    }
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        $path_image = $article->image;
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }
        $article->update([
            'title' => $request->title,
            'author_name' => $request->author_name,
            'author_surname' => $request->author_surname,
            'category' => $request->category,
            'text' => $request->text,
            'image' =>  $path_image

        ]);
        session()->flash('success', 'Articolo Modificato con successo');
        return redirect()->route('articles.index');
    }
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('success', 'Articolo Cancellato con successo');
        return redirect()->route('articles.index');
    }
}
