<?php

Kirby::plugin('mirthe/mytwitter', [
    'options' => [
        'accessToken' => option('twitter.accesstoken'),
        'accessTokenSecret' => option('twitter.accesstokensecret'),
        'consumerKey' => option('twitter.consumerkey'),
        'consumerSecret' => option('twitter.consumersecret'),
        'username' => option('twitter.username')
    ],
    'snippets' => [
        'twitter-posts' => __DIR__ . '/snippets/tweets.php',
        'twitter-likes' => __DIR__ . '/snippets/likes.php'
    ]
]);
