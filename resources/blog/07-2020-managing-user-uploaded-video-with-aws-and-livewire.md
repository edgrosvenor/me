---
title: Managing User Uploaded Video With AWS and Livewire
file: 07-2020-managing-user-uploaded-video-with-aws-and-livewire.md
unsplash: 
cloudinary: boris-misevic-am7MoACtjt8-unsplash_vil0tv.jpg
published_at: 
tags: ['laravel', 'livewire', 'aws']
description: How I quickly and easily set up a site to handle user-uploaded video using AWS Elastic Transcoder, S3, and Livewire
---

I recently worked on a project that centered around user-uploaded video. Specifically youth athletes uploading video for evaluation and instruction by coaches. This would have been a truly daunting task a few years ago, but with the amazing tools we have available to us today, it took about two days. Here's how I did it.

### The User Upload Experience

I actually created two versions of this. The first iteration used the file upload provided by [Laravel Vapor](https://docs.vapor.build/1.0/resources/storage.html#file-uploads). That worked and it was easy. I had some difficulty getting the authorization perfect because this project has three distinct user types, each with a custom guard and each requiring the ability to upload video. I got it working, but I didn't feel great about it. Then a few days later, Caleb released Livewire's file upload. It was a very natural fit because the Vapor uploader was actually wrapped in a Livewire component. Replacing Vapor with Livewire took about 15 minutes and it greatly simplified the authentication stuff.

The end result was little more than this (x-button and x-validation-error are [blade components](https://laravel.com/docs/7.x/blade#components)):

```blade
<x-button onclick="document.getElementById('video').click()">Upload Your Video</x-button>
<input accept="video/*" type="file" id="video" wire:model="video" class="hidden">
<div wire:loading wire:target="video">Uploading...</div>
@error('video') <x-validation-error :message="$message"/> @enderror
```

One thing I know about users is that by the time you have a hundred of them, at least one of them do something you really don't want them to do. The best way to mitigate this when it comes to file uploading is to adhere to NLAUUATYS (Never Let A User Upload Anything To Your Server). That's what S3 is for.


### Standardizing the Video for Playback
 
 

### Relevant Files on This Site's Repo
    
To help you see exactly how I did this, here are the files that you should check out:

[The Action That Fires AWS Elastic Transcoder](#)

[The Livewire Component](#)

[The Livewire Template](#)

[Demo - Upload Your Own Short Video](#)
