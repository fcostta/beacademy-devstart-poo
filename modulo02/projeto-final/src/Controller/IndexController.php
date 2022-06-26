<?php

declare(strict_types = 1);

namespace App\Controller;

class IndexController
{
    public function indexAction(): void
    {
        echo 'Ola mundo, estou dentro do controller';
    }
}