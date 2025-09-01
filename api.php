<?php

include_once 'auth/BaseClass.php';
include_once 'services/PostList.php';

use services\PostList;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");
http_response_code(200);

// logic here...
// retrieve data from database...

$data = [
    'email' => 'test@example.com',
    'username' => 'testuser'
];

// return json format

$post = new PostList();
$posts = $post->getPosts();

echo json_encode($posts); // print

exit();
