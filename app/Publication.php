<?php
    
namespace App;

use App\Models\Post;
use App\Interfaces\SocialMediaServiceInterface;

class Publication {

    protected $socialMediaService;
    
    public function __construct(SocialMediaServiceInterface $socialMediaService)
    {
        $this->socialMediaService = $socialMediaService;
    }

    public function publish(Post $post)
    {
        $post->publish();

        $this->socialize($post);
    }

    protected function socialize($post)
    {
        $this->socialMediaService->share($post);
    }

}