<?php

namespace App\Http\Controllers;

use App\Actions\CreateTwitterCard;
use App\Actions\ListArticles;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{

    public function index()
    {
        return view('blog', ['articles' => (new ListArticles())->execute()->sortByDesc('published_at')]);
    }

    public function article(Request $request, string $article)
    {

        abort_unless(File::exists(resource_path('blog/' . $article)), 404);

        $md = YamlFrontMatter::parse(File::get(resource_path('blog/' . $article)));

        abort_unless($md->matter('published_at') || config('app.env') !== 'production', 404);

        if ($request->has('card') && config('app.env') === 'local') {
            (new CreateTwitterCard())->execute($request->url());
        }

        return view('article', ['fm' => $md->matter(), 'content' => Markdown::parse($md->body())]);

    }

    public function rss()
    {
        return response()->view('rss', ['articles' => (new ListArticles())->execute()])->header('Content-Type', 'application/rss+xml; charset=utf-8');

    }

}
