<?php

Kirby::plugin('mirthe/mytwitter', [
    // 'options' => [
    //     'apiKey' => option('tumblr.apiKey'),
    //     'domain' => option('tumblr.domain'),
    //     'limit' => 30
    // ],
    'snippets' => [
        'twitter-posts' => __DIR__ . '/snippets/tweets.php',
        'twitter-likes' => __DIR__ . '/snippets/likes.php'
    ]
]);
