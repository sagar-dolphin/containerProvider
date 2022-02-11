<?php

namespace App\Services;

use App\Models\Post;
use App\Interfaces\SocialMediaServiceInterface;

class TwitterServices implements SocialMediaServiceInterface
{
    protected $apiKey;

    // public function __construct($apiKey)
    // {
    //     $this->apiKey = $apiKey;
    // }

    public function share(Post $post)
    {
        dd('Shared on Twitter');
    }
}