<?php
class TwitterClient
{
    public function post()
    {
        // 投稿処理
        echo '音ゲーをプレイしたよとつぶやくよ';
    }
}
class Song
{
    public function __construct($title=null)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}

class MusicPlayer
{
    private $song;

    public function __construct()
    {
        $this->song = new Song('test');
    }

    public function play()
    {
        echo '"'.$this->song->getTitle().'"を再生するよ';
    }
}

class Otoge
{
    private $song;
    private $music_player;

    public function __construct()
    {
        $this->song = new Song('test');
        $this->music_player = new MusicPlayer();
        $this->twitter_client = new TwitterClient();
    }

    public function play()
    {
        echo '"'.$this->song->getTitle().'"で音ゲーを開始するよ';
        $this->music_player->play();
        // その他得点記録したりとかの処理
    }

    public function tweet()
    {
        $this->twitter_client->post();
    }
}

$otoge = new Otoge();
$otoge->play();
$otoge->tweet();
