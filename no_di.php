<?php
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