<?php
use Pimple\Container;

$container = new Container();

$container['song'] = function ($c) {
    return new Song();
};

$container['music_player'] = function ($c) {
    return new MusicPlayer();
};

$container['otoge'] = function ($c) {
    return new Otoge($c['song'], $c['music_player']);
};
