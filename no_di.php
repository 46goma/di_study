<?php
class Song
{
    public function __construct()
    {
        $this->title = null;
    }
    public function setTitle($title)
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
        $this->song = new Song();
        $this->song->setTitle('test');
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
        $this->song = new Song();
        $this->song->setTitle('test');
        $this->music_player = new MusicPlayer();
    }

    public function play()
    {
        echo '"'.$this->song->getTitle().'"で音ゲーを開始するよ';
        $this->music_player->play();
        // その他得点記録したりとかの処理
    }
}

$otoge = new Otoge();
$otoge->play();