<?php

namespace RefactoringGuru\Builder\Conceptual;

interface HouseBuilder
{
    public function buildFoundation(): void;
    public function buildWindows(): void;
    public function buildDoors(): void;
    public function buildFlooring(): void;
    public function buildRoof(): void;
}

class HouseGardenBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product1();
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildGarden(): void
    {
        $this->product->parts[] = "Garden";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function getResult(): Product1
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class HouseGarageBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product2();
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildGarden(): void
    {
        $this->product->parts[] = "Garden";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function getResult(): Product2
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class HouseSwimmingPoolBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product3();
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildGarden(): void
    {
        $this->product->parts[] = "Garden";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function getResult(): Product3
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class HouseStatuesBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product4();
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildGarden(): void
    {
        $this->product->parts[] = "Garden";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function buildFancyStatues(): void
    {
        $this->product->parts[] = "Fancy Statues";
    }

    public function getResult(): Product4
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}



class Product1
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Product2
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Product3
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}


class Product4
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}



class Director
{
    /**
     * @var HouseBuilder
     */
    private $builder;

    public function setHouseBuilder(HouseBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function makeHouseGarden(): void
    {
        $this->builder->BuildFoundation();
        $this->builder->BuildWalls();
        $this->builder->BuildWindows();
        $this->builder->BuildRoof();
        $this->builder->BuildGarden();
        $this->builder->BuildFlooring();
        $this->builder->BuildDoors();
    }

    public function makeHouseGarage(): void
    {
        $this->builder->BuildFoundation();
        $this->builder->BuildWalls();
        $this->builder->BuildWindows();
        $this->builder->BuildRoof();
        $this->builder->BuildGarden();
        $this->builder->BuildFlooring();
        $this->builder->BuildDoors();
    }

    public function makeHouseSwimmingPool(): void
    {
        $this->builder->BuildFoundation();
        $this->builder->BuildWalls();
        $this->builder->BuildWindows();
        $this->builder->BuildRoof();
        $this->builder->BuildGarden();
        $this->builder->BuildFlooring();
        $this->builder->BuildDoors();
    }

    public function makeHouseStatues(): void
    {
        $this->builder->BuildFoundation();
        $this->builder->BuildWalls();
        $this->builder->BuildWindows();
        $this->builder->BuildRoof();
        $this->builder->BuildGarden();
        $this->builder->BuildFlooring();
        $this->builder->BuildDoors();
    }
}


function makeHouse(Director $director)
{
    $builder = new HouseGardenBuilder();
    $director->setHouseBuilder($builder);

    echo "House Garden\n";
    $director->makeHouseGarden();
    $builder->getResult()->listParts();

    $garageBuilder = new HouseGarageBuilder();
    $director->setHouseBuilder($garageBuilder);

    echo "House Garage\n";
    $director->makeHouseGarage();
    $garageBuilder->getResult()->listParts();

    $swimmingPoolBuilder = new HouseSwimmingPoolBuilder();
    $director->setHouseBuilder($swimmingPoolBuilder);


    echo "House Swimming Pool\n";
    $director->makeHouseSwimmingPool();
    $swimmingPoolBuilder->getResult()->listParts();

    $fancyStatuesBuilder = new HouseStatuesBuilder();
    $director->setHouseBuilder($StatuesBuilder);


    echo "House Statues\n";
    $director->makeHouseStatues();
    $fancyStatuesBuilder->getResult()->listParts();
}

$director = new Director();
makeHouse($director);