# Simple Twitter Client

This package can only tweet string.

## Usage

0. Get Twitter key and tokens.

To use Twitter API, you must get Twitter key and tokens.
https://apps.twitter.com/

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
