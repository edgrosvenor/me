<?php

namespace App\Actions;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class ListArticles
{
    public function __construct()
    {

    }

    public function execute(bool $published = true): Collection
    {
        $results = collect([]);
        $files = scandir(resource_path('blog'));

        foreach ($files as $file) {
            if (Str::contains($file, '.md')) {
                $md = File::get(resource_path('blog/'.$file));
                $fm = YamlFrontMatter::parse($md)->matter();
                if (!empty($fm['published_at']) === $published) {
                    $results->push($fm);
                }
            }

        }

        return $results;

    }
}
