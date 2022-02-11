<?php

namespace App\Services;

use App\Models\Post;
use App\Interfaces\SocialMediaServiceInterface;


class LinkedInServices implements SocialMediaServiceInterface 
{
    public function share(Post $post)
    {
        dd('shared on LinkedIn!');
    }
}