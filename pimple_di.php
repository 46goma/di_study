<?php
require_once 'vendor/autoload.php';
require_once './config_container.php';

interface TwitterClientInterface
{
    public function post();
}

class TwitterClient implements TwitterClientInterface
{
    public function post()
    {
        // 投稿処理
        echo '音ゲーをプレイしたよとつぶやくよ';
    }
}

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

    /**
     * @var TwitterClientInterface
     */
    private $twitter_client;

    public function __construct(SongInterface $song, MusicPlayerInterface $music_player, TwitterClientInterface $twitter_client)
    {
        $this->song = $song;
        $this->music_player = $music_player;
        $this->twitter_client = $twitter_client;
    }

    public function play()
    {
        echo '"'.$this->song->getTitle().'"で音ゲーを開始するよ';
        $this->music_player->play();
    }

    public function tweet()
    {
        $this->twitter_client->post();
    }
}

$container['song.title'] = 'hoge';
$otoge = $container['otoge'];
$otoge->play();
$otoge->tweet();
