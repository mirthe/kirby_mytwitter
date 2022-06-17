<div class="masonry">
<?php $tweets = returnTweet($twitter_timeline, 15);
foreach($tweets as $tweet):
    // TODO add data-theme="dark" when in darkmode in theme-toggle.js ?>
    <div class="block block--tweet">
        <blockquote class="twitter-tweet">
            <a href="https://twitter.com/x/status/<?= $tweet["id"] ?>"></a> 
        </blockquote>
    </div>
<?php endforeach ?>
</div>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>