<?php

header("Content-Type: application/json");
http_response_code(200);

// logic here...
// retrieve data from database...

$data = [
    'email' => 'test@example.com',
    'username' => 'testuser'
];

echo json_encode($data);

exit();
