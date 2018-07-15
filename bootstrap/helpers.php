<?php

function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        $url = parse_url('postgres://pxinsmnhndpzix:80ad5011fc85f1d8d2b44ffd56349976bbbaa8222d9868fdacffe5c022f0172a@ec2-23-21-164-107.compute-1.amazonaws.com:5432/dbiltqkmj09bnc');

        return $db_config = [
            'connetion' => 'pgsql',
            'host' => $url["host"],
            'database'  => substr($url["path"], 1),
            'username'  => $url["user"],
            'password'  => $url["pass"],
        ];
    } else {
        return $db_config = [
            'connetion' => env('DB_CONNECTION', 'mysql'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'database'  => env('DB_DATABASE', 'myblog'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', 'root'),
        ];
    }
}