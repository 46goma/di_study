<?php
require_once './class_for_di.php';

$song = new Song('test');
$music_player = new MusicPlayer($song);
$twitter_client = new TwitterClient();
$otoge = new Otoge($song, $music_player, $twitter_client);
$otoge->play();
$otoge->tweet();
