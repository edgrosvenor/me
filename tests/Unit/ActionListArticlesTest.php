<?php

namespace Tests\Unit;

use App\Actions\ListArticles;
use Illuminate\Support\Collection;
use Tests\TestCase;

class ActionListArticlesTest extends TestCase
{

    /** @test */
    public function it_can_list_published_articles()
    {
        $published = (new ListArticles())->execute();

        $this->assertInstanceOf(Collection::class, $published);
        $this->assertStringContainsString('05-2020-parsing-markdown-with-code-highlighting.md', $published->toJson());
        $this->assertStringNotContainsString('05-2020-this-article-will-never-get-published.md"', $published->toJson());

        dd($published);
    }

    /** @test */
    public function it_can_list_pending_articles()
    {
        $pending = (new ListArticles())->execute(false);

        $this->assertInstanceOf(Collection::class, $pending);

        $this->assertStringContainsString('05-2020-this-article-will-never-get-published.md"', $pending->toJson());
        $this->assertStringNotContainsString('05-2020-parsing-markdown-with-code-highlighting.md', $pending->toJson());
    }
}
