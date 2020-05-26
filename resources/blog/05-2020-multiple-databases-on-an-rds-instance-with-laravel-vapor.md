---
title: Running Multiple Databases on One RDS Instance with Laravel Vapor
file: 05-2020-multiple-databases-on-an-rds-instance-with-laravel-vapor.md
unsplash: 
cloudinary: w7t8bv2pwpar3tfj9ath.png 
published_at: 2020-05-25
tags: [laravel, vapor, mysql]
description: A tiny missing piece of Laravel Vapor Documentation.
---
This site runs on Vapor. I use Vapor at work all the time and because it's work and we can afford it, we just create an appropriately sized database instance for every site. But since I want to keep my costs down for my personal projects, I created a single affordable RDS instance and will be sharing it among all my personal sites. Here's how I'll do it.

This is the vapor.yml of this site as of this writing. You'll notice the `database: personal-sites` line in the production environment block. 
```yaml
id: 10228
name: me
environments:
    production:
        domain: edgrosvenor.me
        warm: 12
        memory: 1024
        cli-memory: 512
        runtime: php-7.4
        concurrency: 12
        database: personal-sites
        build:
            - 'COMPOSER_MIRROR_PATH_REPOS=1 composer install --no-dev'
            - 'php artisan event:cache'
            - 'npm ci && npm run prod && rm -rf node_modules'

```

With this configuration, this site would use a database called `vapor` with a user named `vapor` on the `personal-sites` RDS instance. I fired up Table Plus and created a database called `edgrosvenor_me` on that instance and will be using that instead by simply adding this to my .env.production file<sup>1</sup>:

```.dotenv
DB_DATABASE=edgrosvenor_me
```

Behind the scenes this works because Vapor sets some reasonable defaults for your environment. You don't have to fully configure anything. You only have to override the defaults for things you want to change. If I wanted to use a different database user instead of the default `vapor` I could do this:

```dotenv
DB_USERNAME=differnetuser
DB_PASSWORD=passw0rd
```

This isn't explicitly stated in the Vapor documentation. Maybe it should be. But what I've found so far with Vapor is that when you're not sure how something works, take an educated guess. Do what you would do if you were trying to make something work on a regular server. It'll probably work. It almost always does for me.

<div class="bg-gray-50 p-2 italic">
<sup>1</sup> To edit your .env.production file (the Vapor equivalent of .env for the production environment of your site on Vapor), run <strong>vapor env:pull production</strong>. After you've made your edits, run <strong>vapor env:push production</strong> and decide whether or not to delete the file from your local machine. I always do, but I'm not your dad so do what you want.<br><br>If you have a staging environment, it's <strong>vapor env:pull staging</strong> and <strong>vapor env:push staging</strong>.
</div>

