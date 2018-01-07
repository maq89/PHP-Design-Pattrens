<?php
/*
 * Adapter pattern PHP: An adapter helps two incompatible interfaces to work together.
 * This is the real world definition for an adapter. The adapter design pattern is
 * used when you want two different classes with incompatible interfaces to work together.
 * Interfaces may be incompatible but the inner functionality should suit the need.
 * The Adapter pattern allows otherwise incompatible classes to work together by converting
 * the interface of one class into an interface expected by the clients.
 */
class Facebook
{
    public function postToWall($msg)
    {
        echo $msg;
    }
}

interface SocialMediaAdapter
{
    public function post($msg);
}

class FacebookAdapter implements SocialMediaAdapter
{
    private $facebook;

    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function post($msg)
    {
        $this->facebook->postToWall($msg);
    }
}

$facebook = new FacebookAdapter(new Facebook);
$facebook->post('Hello, Greeting...');