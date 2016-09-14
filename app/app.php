<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Replace.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $new_Replace = new Replace;
        $result = $new_Replace->find_replace($_GET['input1'], $_GET['input2'], $_GET['input3']);
        return $app['twig']->render('result.html.twig', array('result' => $result));
    });

    return $app;
?>
