<?php

declare(strict_types=1);

const DB_HOST = 'db.3wa.io';  // Would probably be `localhost` or `127.0.0.1` in your case (:
const DB_PORT = '3306';
const DB_NAME = 'yarnochedemail_chat';
const DB_USERNAME = 'yarnochedemail';
const DB_PASSWORD = '41d111c3f3f879c3db61a96eddfc8d3c';

function getConnection(): \PDO
{
    return new \PDO(
        'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME,
        DB_USERNAME,
        DB_PASSWORD
    );
}

// var_dump(getConnection());