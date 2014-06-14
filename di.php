<?php
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
    public function play(SongInterface $song);
}

class MusicPlayer implements MusicPlayerInterface
{
    public function play(SongInterface $song)
    {
        echo '"'.$song->getTitle().'"を再生するよ';
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

$song = new Song();
$music_player = new MusicPlayer();
$otoge = new Otoge($song, $music_player);
$song->setTitle('test');
$otoge->play();
