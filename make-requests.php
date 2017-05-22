<?php

class Client
{
    private const BASE_URI = 'http://localhost:8888/';

    public function requestAllExamples(): void
    {
        for ($x=0; $x<=5; $x++) {
            $this->get('example0'.$x.'.php');
        }
    }

    public function get(string $page): string
    {
        return file_get_contents(static::BASE_URI.$page);
    }
}

$client = new Client;
echo 'Starting...'.PHP_EOL;
for ($x=0; $x<=400; $x++) {
    $client->requestAllExamples();
}
echo 'Done'.PHP_EOL;