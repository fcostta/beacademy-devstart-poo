<?php

declare(strict_types=1);

class Category
{

    private string $name;
    private string $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }


}
