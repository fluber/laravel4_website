<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});
Route::get('/about', function()
{
	return View::make('about');
});
Route::get('/portfolio', function()
{
	return View::make('portfolio');
});
Route::get('/service', function()
{
	return View::make('service');
});
Route::get('/contact', function()
{
	return View::make('contact');
});
Route::get('/privacy', function()
{
    return View::make('privacy');
});

Route::post('/contact', function()
{
    $to = "fluber@winerva.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "客服信件：鴻博資訊有限公司官網轉寄";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"}= "email";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; 
    foreach($fields as $a => $b) 
    {
        $body .= sprintf("%20s: %s\n", $b, $_REQUEST[$a]);
    }

    $send = mail($to, $subject, $body, $headers);

    return 0;
});

Route::get('sitemap', function() 
{
        $sitemap = App::make('sitemap');

        $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

        foreach ($posts as $post)
        {
             $sitemap->add($post->slug, $post->modified, $post->priority, $post->freq);
        }

        return $sitemap->render('xml');
});

