<?php

namespace App\Animals;

use App\Animal;

class CatFish extends Fish
{
    protected function getNoise(): string
    {
        return 'bloubloublou';
    }

}