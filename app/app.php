<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.Php';

    session_start();
    if (empty($_SESSSION['list_of_games'])){
        $_SESSION['list_of_games'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array(
       'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function () use ($app) {
        return $app['twig']->render('rock_paper_scissors.html.twig',array('games'=> RockPaperScissors::getAll()));
    });

    $app->get('/add_players', function () use ($app) {
        $new_game = new RockPaperScissors;
        $player1 = $_GET['player1'];
        $player2 = $_GET['player2'];
        $new_game->save();
        return $app['twig']->render('players_created.html.twig',array(
            'player1'=>$player1,
            'player2'=> $player2
            ));
    });
    return $app;
?>
