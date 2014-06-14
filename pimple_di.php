<?php
require_once 'vendor/autoload.php';
require_once './config_container.php';

interface SongInterface
{
    public function setTitle($title);
    public function getTitle();

    // ...など曲に関する諸々
}

class Song implements SongInterface
{
    public function __construct()
    {
        $this->title = null;
    }
    public function setTitle($title)
    {
        return $this->title = $title;
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
        $this->music_player->play($this->song);
    }
}

$otoge = $container['otoge'];
$container['song']->setTitle('test');
$otoge->play();
