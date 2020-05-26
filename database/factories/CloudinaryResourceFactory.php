<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CloudinaryResource;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(CloudinaryResource::class, function (Faker $faker) {
    $id = $faker->shuffleString('c87hg9xfxrd4itiim3t0');
    $format = $faker->shuffleArray(['jpg', 'png', 'mp4']);
    $type = $format === 'mp4' ? 'video' : 'image';
    $version = $faker->numberBetween(1571218607, 2571218607);
    return [
        'user_id' => Str::random(1, 10000),
        'title' => Str::title($this->sentence),
        'description' => $faker->sentences(3, true),
        'tags' => [$faker->word, $faker->word, $faker->word, $faker->word],
        'url' => '//res.cloudinary.com/demo/image/upload/v'.$version.'/'.$id.'.'.$format,
        'resource_type' => $type,
        'upload_response' => [
            'public_id' => $id,
            'version' => $version,
            'signature' => $faker->password(15, 20),
            'width' => $faker->numberBetween(640, 1024000),
            'height' => $faker->numberBetween(640, 1024000),
            'format' => $format,
            'created_at' => $faker->dateTime,
            'bytes' => $faker->numberBetween(100000,10000000),
            'url' => 'http://res.cloudinary.com/demo/image/upload/v'.$version.'/'.$id.'.'.$format,
            'secure_url' => 'https://res.cloudinary.com/demo/image/upload/v'.$version.'/'.$id.'.'.$format,
        ],
    ];
});
