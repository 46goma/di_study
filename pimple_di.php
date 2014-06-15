<?php
require_once 'vendor/autoload.php';
require_once './config_container.php';

interface SongInterface
{
    public function getTitle();

    // ...など曲に関する諸々
}

class Song implements SongInterface
{
    public function __construct($title=null)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    // ...
}

interface MusicPlayerInterface
{
    public function play();
}

class MusicPlayer implements MusicPlayerInterface
{
    /**
     * @var SongInterface
     */
    private $song;

    public function __construct(SongInterface $song)
    {
        $this->song = $song;
    }
    public function play()
    {
        echo '"'.$this->song->getTitle().'"を再生するよ';
    }
}

class Otoge
{
    /**
     * @var SongInterface
     */
    private $song;

    /**
     * @var MusicPlayerInterface
     */
    private $music_player;

    public function __construct(SongInterface $song, MusicPlayerInterface $music_player)
    {
        $this->song = $song;
        $this->music_player = $music_player;
    }

    public function play()
    {
        echo '"'.$this->song->getTitle().'"で音ゲーを開始するよ';
        $this->music_player->play();
    }
}

$container['song.title'] = 'hoge';
$otoge = $container['otoge'];
$otoge->play();
