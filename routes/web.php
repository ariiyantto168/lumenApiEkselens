<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('/key', function() { 
//     return \Illuminate\Support\Str::random(32);
// });

// categories
$router->get('categories','CategoriesController@index');
$router->get('categories/{idcategories}','CategoriesController@create_page');
$router->post('categories','CategoriesController@create_save');
$router->put('categories/{idcategories}','CategoriesController@update_save');
$router->delete('categories/{idcategories}','CategoriesController@delete');

// testimonies
$router->get('testimonies','TestimoniesController@index');
$router->get('testimonies/{testimonies}','TestimoniesController@create_page');
$router->post('testimonies','TestimoniesController@create_save');
$router->put('testimonies/{testimonies}','TestimoniesController@update_save');
$router->delete('testimonies/{testimonies}','TestimoniesController@delete');

// Referals
$router->get('referals','ReferalsController@index');
$router->get('referals/{referals}','ReferalsController@create_page');
$router->post('referals','ReferalsController@create_save');
$router->put('referals/{referals}','ReferalsController@update_save');

// class
$router->get('class','ClassController@index');
$router->get('class/{class}','ClassController@select_id');

// subclass
$router->get('subclass','SubclassController@index');
$router->get('subclass/{subclass}','SubclassController@select_id');

// materies
$router->get('materies','MateriesController@index');
$router->get('materies/{materies}','MateriesController@select_id');

// HilightsController
$router->get('hilights','HilightsController@index');
$router->get('hilights/{hilights}','HilightsController@select_id');

//comments
$router->get('comments','CommentsController@index');
$router->get('comments/{comments}','CommentsController@select_id');
$router->post('comments','CommentsController@create_save');
$router->put('comments/{comments}','CommentsController@update_save');
$router->delete('comments/{comments}','CommentsController@delete');

// populers
$router->get('populers','PopulersController@index');
$router->get('populers/{populers}','PopulersController@select_id');

// careers
$router->get('careers','CareersControlller@index');
$router->get('careers/{careers}','CareersControlller@select_id');

// newclass
$router->get('newclass','NewclassController@index');
$router->get('newclass/{newclass}','NewclassController@select_id');