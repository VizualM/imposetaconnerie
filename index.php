<?php


  // require composer autoload (load all my libraries)
  require 'vendor/autoload.php';
    
  require 'models/connexion_bdd.php';
  
  require 'models/Book.php';

  

  // Slim initialisation
  $app = new \Slim\Slim(array(
    'view' => '\Slim\LayoutView', // I activate slim layout component
    'layout' => 'layouts/main.php' // I define my main layout
  ));

  // hook before.router, now $app is accessible in my views
  $app->hook('slim.before.router', function () use ($app) {
    $app->view()->setData('app', $app);
  });

  // views initiatilisation
  $view = $app->view();
  $view->setTemplatesDirectory('views');



  // GET /
  $app->get('/', function() use ($app) {
    $images = Image::all();
    $app->render(
        'images/index.php',
        array("images"=>$images)
    );
  })->name('root'); // named route so I can use with "urlFor" method


 // GET /images
  $app->get('/images/', function() use ($app) {
    $images = Image::all();
    $app->render(
        'images/index.php',
        array("images"=>$images)
    );
  })->name('images');


  // GET /images/:image_id
  $app->get('/images/:image_id', function ($image_id) use ($app) {
    $image = Image::getImage($image_id);
    $app->render('images/show.php');
  })->name('image'); 


// GET /gifs
  $app->get('/gifs/', function() use ($app) {
    $gifs = Gif::all();
    $app->render('gifs/index.php');
  })->name('gifs'); // named route so I can use with "urlFor" method


  // GET /gifs/:gif_id
  $app->get('/gifs/:gif_id', function ($book_id) use ($app) {
    $gif = Gif::getGif($gif_id);
    $app->render('gifs/show.php');
  })->name('gif'); // named route so I can use with "urlFor" method




















  // always need to be at the bottom of this file !
  $app->run();