<?php

namespace App\Animals;

use App\Animal;

class BubbleFish extends Fish
{
    protected function getNoise(): string
    {
        return 'bloubloublou';
    }

}