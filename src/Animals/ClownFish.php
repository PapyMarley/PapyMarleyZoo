<?php

namespace App\Animals;

use App\Animal;

class ClownFish extends Fish
{
    protected function getNoise(): string
    {
        return 'bloubloublou';
    }
}