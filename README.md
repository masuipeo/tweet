# Simple Twitter Client

This package can tweet string only.

## Usage

0. Get Twitter key and tokens.

To use Twitter API, you must get Twitter key and tokens.

https://apps.twitter.com/

If you want, you can use the below sample for "Describe in your own words what you are building".
But I do NOT guarantee if your application does not pass.

This package need the following keys and tokens.
- Consumer API keys
  * API key
  * API secret key
- Access token & access token secret
  * Access token
  * Access token secret

1. Get Composer package.

```sh
$ composer require masuipeo/tweet
```

2. Make a PHP script.

To fill key and tweet contents in below file.
And save this file as tweet.php.

```php tweet.php
<?php

require 'vendor/autoload.php';

use Masuipeo\Tweet\Tweet;

$keys = [
    "consumer_key" => "xxxxxxxxxx",
    "consumer_secret" => "xxxxxxxxxx",
    "access_token" => "xxxxxxxxxx",
    "access_token_secret" => "xxxxxxxxxx"
];

$twitter = new Tweet($keys);
if ($twitter->tweet("Hello, Twitter.")) {
    echo "Success";
} else {
    echo "Failure";
}
```

3. Run the PHP script.

```sh
$ php tweet.php
```

## The sample for "Describe in your own words what you are building"

> 1. I'm using Twitter's API to make bot which tweet my contents.
> I want to increase access to my website.
> By tweeting regularly, I would like to raise awareness of my website against followers.
> 
> 2. I plan to count the tweets that have been retweeted or liked.
> It is only for private use.
> 
> 3. Yes, I will use only Tweet bot.
> I won't interact with Twitter users or their content.
> 
> 4. I use only tweet my original contents by bot.
> And I will use Twitter's API for private.
> So I don't display Twitter data to users.
