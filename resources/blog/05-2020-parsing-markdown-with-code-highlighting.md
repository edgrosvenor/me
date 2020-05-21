---
title: Parsing Mardown with Code Highlighting
file: 05-2020-parsing-markdown-with-code-highlighting.md
unsplash: 1488590528505-98d2b5aba04b
published_at: 2020-05-21
tags: [javascript, markdown, laravel]
description: I wanted to add code highlighting to my new markdown-powered Laravel blog. Here's how I did it.
---
Like many developers, I find writing markdown to be very easy and natural. And like many developers, it was an obvious choice for my blog. I decided to see what it would take to set up code highlighting so my code snippets are easier to read. It turned out to be easier than I expected.

```php
public function article($article)
{
    abort_unless(File::exists(resource_path('blog/' . $article)), 404);
            
    $md = YamlFrontMatter::parse(File::get(resource_path('blog/' . $article)));
            
    abort_unless($md->matter('published_at') || config('app.env') !== 'production', 404);
    
    return view('article', ['fm' => $md->matter(), 'content' => Markdown::parse($md->body())]);
}
```
Laravel already parses markdown mail templates, so I just use what the framework provides in `Illuminate\Mail\Markdown`. Then adding code highlighting was a simple matter of setting up [highlight.js](https://highlightjs.org/) and writing my markdown exactly the same way I do on GitHub.

```html
<!-- At the bottom of your head tag -->
<link rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/styles/default.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/highlight.min.js"></script> 
```
```javascript
hljs.initHighlightingOnLoad(); // At the bottom of your body tag
```
Then in my blade template, I just had to use the markdown-body class on the div that holds my parsed markdown:
```blade
<div class="markdown-body my-6">
    {{ $content }}
</div>
```

### Relevant Files on This Site's Repo
To help you see exactly how I did this, here are the files that you should check out:


