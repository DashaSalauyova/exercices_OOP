<?php

namespace test;

use test\User;
// require_once('User.php');

class Post extends User{

    public $service;
    public $post;
    public $expirience;

    public function __construct() {
        $this->service = 'informatique';
        $this->post = 'DSI';
        $this->expirience = '20 ans';
    }
}

$employed = new Post();
$employed->service = 'Developement';
$employed->post = 'Junior';

?>

<pre><?=var_dump($employed)?></pre>