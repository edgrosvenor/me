<?xml version="1.0" encoding="ISO-8859-1"?>
<rss version="2.0">
    <channel>
        <title>Ed Grosvenor</title>
        <link>https://edgrosvenor.me/blog</link>
        <description>My personal blog, mostly focused on web development.</description>
        <language>en-us</language>
        <copyright>Copyright (C) {{ date('Y') }} Ed Grosvenor</copyright>
        @foreach ($articles as $article)
        <item>
            <title>{{ $article['title'] }}</title>
            <description>{{ $article['description'] }}</description>
            <link>https://edgrosvenor.me/blog/{{ $article['file'] }}</link>
            <pubDate>{{ \Carbon\Carbon::parse($article['published_at'])->format('D, d M Y H:i:s O') }}</pubDate>
        </item>
        @endforeach
    </channel>
</rss>
