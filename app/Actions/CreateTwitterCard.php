<?php

namespace App\Actions;

use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class CreateTwitterCard
{
    public function execute($url)
    {

        $article = last(explode('/', $url));

        $screenshot = Browsershot::url('http://me.test/twitter_card/'.$article)
            ->setIncludePath('$PATH:/usr/local/bin')
            ->setScreenshotType('jpeg')
            ->select('#card')
            ->deviceScaleFactor(1)
            ->windowSize(1024, 512)
            ->screenshot();

        Storage::disk('s3')->put('twitter_cards/'.$article.'.jpg', $screenshot, 'public');
    }
}
