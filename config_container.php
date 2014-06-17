<?php
use Pimple\Container;

$container = new Container();

$container['song.title'] = '';

$container['song'] = $container->factory(function ($c) {
    return new Song($c['song.title']);
});

$container['music_player'] = $container->factory(function ($c) {
    return new MusicPlayer($c['song']);
});

$container['otoge'] = $container->factory(function ($c) {
    return new Otoge($c['song'], $c['music_player']);
});
