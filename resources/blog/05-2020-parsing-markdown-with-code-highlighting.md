---
title: Parsing Mardown with Code Highlighting
file: 05-2020-parsing-markdown-with-code-highlighting.md
unsplash: 
cloudinary: oncql5uvq8jtw8sxzo1a.jpg
published_at: 2020-05-21
tags: [javascript, markdown, laravel]
description: I wanted to add code highlighting to my new markdown-powered Laravel blog. Here's how I did it.
---
Like many developers, I find writing markdown to be very easy and natural. And like many developers, it was an obvious choice for my blog. I think syntax highlighting makes code snippets way easier to read and understand, so I decided to add it to my blog. It turned out to be easier than I expected.

```php
public function article($article)
{
    abort_unless(File::exists(resource_path('blog/' . $article)), 404);
            
    $md = YamlFrontMatter::parse(File::get(resource_path('blog/' . $article)));
            
    abort_unless($md->matter('published_at') || config('app.env') !== 'production', 404);
    
    return view('article', ['fm' => $md->matter(), 'content' => Markdown::parse($md->body())]);
}
```
Laravel already parses markdown mail templates, so I just use what the framework provides in `Illuminate\Mail\Markdown`. Because this library just converts the markdown to html it comes out pretty bland and unstyled. I used [this stylesheet](https://github.com/sindresorhus/github-markdown-css) to give it a nice clean look:
```html
<link href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/4.0.0/github-markdown.min.css" rel="stylesheet">
```
                                                                                                                                                                                                                         
Then adding code highlighting was a simple matter of setting up [highlight.js](https://highlightjs.org/):.

```html
<!-- At the bottom of your head tag -->
<link rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/styles/default.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/highlight.min.js"></script> 
```
```javascript
hljs.initHighlightingOnLoad(); // Javascript placed the bottom of your body tag
```
Then in my blade template, I just had to use the markdown-body class on the div that holds my parsed markdown:
```blade
<div class="markdown-body">
    {{ $content }}
</div>
```

All in all, it took me about an hour to set up my markdown file-driven Laravel blog. In the coming days, I'll go over some other things I've set up to make it super easy to add content.

### Relevant Files on This Site's Repo
To help you see exactly how I did this, here are the files that you should check out:

[My blog controller](https://github.com/edgrosvenor/me/blob/master/app/Http/Controllers/Blog.php)

[The blade file that wraps all my articles](https://github.com/edgrosvenor/me/blob/master/resources/views/article.blade.php)

[This article's markdown file](https://github.com/edgrosvenor/me/blob/master/resources/blog/05-2020-parsing-markdown-with-code-highlighting.md)

[My app's layout where I include and init highlight.js](https://github.com/edgrosvenor/me/blob/master/resources/views/layouts/app.blade.php)
