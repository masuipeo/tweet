<?php

namespace Masuipeo\Tweet;

use Abraham\TwitterOAuth\TwitterOAuth;

class Tweet
{
    private $oauth = null;

    public function __construct($keys)
    {
        $this->oauth = new TwitterOAuth(
            $keys["consumer_key"],
            $keys["consumer_secret"],
            $keys["access_token"],
            $keys["access_token_secret"]
        );
    }

    public function tweet($value)
    {
        $result = $this->oauth->post(
            "statuses/update",
            ["status" => $value]
        );

        if ($this->oauth->getLastHttpCode() == 200) {
            return true;
        } else {
            return false;
        }
    }
}
