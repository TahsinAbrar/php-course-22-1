<?php

return [
    'db_host' => $_ENV['DB_HOST'] ?? '',
    'db_port' => $_ENV['DB_PORT'] ?? '',
    'db_user' => $_ENV['DB_USER'] ?? '',
    'db_password' => $_ENV['DB_PASSWORD'] ?? '',
    'db_name' => $_ENV['DB_NAME'] ?? '',
];
