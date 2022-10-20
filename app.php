<?php
    require __DIR__ . '/vendor/autoload.php';

    use App\Animals\Fish;

    $fish = new Fish('Poisson');

    echo $fish->getName() . PHP_EOL;
    echo $fish->noise() . PHP_EOL;

    use App\Animals\BubbleFish;

    $BubbleFish = new BubbleFish('Poisson Globe');

    echo $BubbleFish->getName() . PHP_EOL;
    echo $BubbleFish->Noise() . PHP_EOL;

    use App\Animals\CatFish;

    $CatFish = new CatFish('Poisson Chat');

    echo $CatFish->getName() . PHP_EOL;
    echo $CatFish->Noise() . PHP_EOL;

    use App\Animals\ClownFish;

    $ClownFish = new ClownFish('Poisson Clown');

    echo $ClownFish->getName() . PHP_EOL;
    echo $ClownFish->Noise() . PHP_EOL;

    use App\Animals\Whale;

    $Whale = new Whale('Baleine');

    echo $Whale->getName() . PHP_EOL;
    echo $Whale->Noise() . PHP_EOL;

    use App\Animals\Zebra;

    $Zebra = new Zebra('Zèbre');

    echo $Zebra->getName() . PHP_EOL;
    echo $Zebra->Noise() . PHP_EOL;

    use App\Animals\Elephant;

    $Elephant = new Elephant('Elephant');

    echo $Elephant->getName() . PHP_EOL;
    echo $Elephant->Noise() . PHP_EOL;

    use App\Animals\Parrot;

    $Parrot = new Parrot('Perroquet');

    echo $Parrot->getName() . PHP_EOL;
    echo $Parrot->Noise() . PHP_EOL;


    use App\Animals\Dove;

    $Dove = new Dove('Colombe');

    echo $Dove->getName() . PHP_EOL;
    echo $Dove->Noise() . PHP_EOL;