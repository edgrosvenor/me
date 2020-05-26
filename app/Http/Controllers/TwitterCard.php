<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class TwitterCard
{
    public function __invoke(string $article)
    {
        abort_unless(File::exists(resource_path('blog/' . $article)), 404);

        $md = YamlFrontMatter::parse(File::get(resource_path('blog/' . $article)));

        abort_unless($md->matter('published_at') || config('app.env') !== 'production', 404);

        return view('twitter_card', ['fm' => $md->matter(), 'content' => Markdown::parse($md->body())]);
    }
}
