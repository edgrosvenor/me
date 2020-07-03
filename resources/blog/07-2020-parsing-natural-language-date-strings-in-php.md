---
title: Parsing Natural Language Date Strings in PHP
file: 07-2020-parsing-natural-language-date-strings-in-php.md
unsplash: 
cloudinary: boris-misevic-am7MoACtjt8-unsplash_vil0tv.jpg
published_at: 2020-07-03
tags: [php, date, time, regex]
description: The exceptional steps I'm willing to take in an effort to avoid using javascript date pickers
---

I'm constantly surprised and frustrated at how difficult it is to get and use date and time input from users. I remember
being frustrated by it in the 90s and it doesn't feel like we've come all that far since then. To
have a truly consistent interface for users we often reach for complex javascript-powered date pickers. Even the native
browser implementations of HTML5 date and time fields make users want to reach for the mouse, creating a bottleneck in
every form that uses them.

My family uses [Cozi Family Organizer](https://www.cozi.com/) to do our meal planning and make sure that at least one
adult is scheduled to be in the same state as the children every day (less of a problem in the age of covid). Their
web app has a really nice open text add to calendar feature that very accurately parses sentences into calendar events. 

<img width="632" alt="Screen Shot 2020-07-03 at 2 48 22 PM" src="https://user-images.githubusercontent.com/1053395/86494799-44e88d00-bd3c-11ea-901c-082a9ad64bd3.png">
---
I use this feature dozens of times a week and every time I do I wish I could give my users the same experience. This
week I reached my pain threshold and decided to do something about it. I definitely have not duplicated what Cozi's
interface offers, but I do have a pretty good jumping off point for letting people enter date and time in a natural,
keyboard-only manner.

### Introducing [Sundial](https://github.com/grosv/sundial)

On Thursday I built Sundial, a natural language date and time parser that does a pretty good job of pulling dates and times out of blocks of text. It currently works with absolute dates and times (June 11th at 4:15 pm), with relative dates and times (next thursday at noon) limited to strings that strtotime() can parse on its own. This <strong>minimum viable package</strong> meets the core need I have at work. But I'm hoping that with a little help from the community we can take it WAY furhter.

[Try To Break Sundial (Please)](/demo/sundial)

[Contribute on GitHub](https://github.com/grosv/sundial)
