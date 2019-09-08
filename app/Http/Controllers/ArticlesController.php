<?php
namespace App\Http\Controllers;
use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index', 'show']);
    }
    //
    public function index()
    {
        $articles = Article::latest('published_at')->latest('created_at')
            ->published()
            ->get();
        return view('articles.index', compact('articles'));
    }
    //
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }
    //
    public function create()
    {
        return view('articles.create');
    }
    //
    public function store(ArticleRequest $request) {
        Auth::user()->articles()->create($request->validated());
        return redirect()->route('articles.index')
            ->with('message', '記事を追加しました。');
    }
    //
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    //
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->validated());
        return redirect()->route('articles.show', [$article->$id])
            ->with('message', '記事を編集しました。');
    }
    //
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('articles')->with('message', '記事を削除しました。');
    }
}
