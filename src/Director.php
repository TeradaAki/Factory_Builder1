<?php

namespace App;

class Director
{
    @var HouseBuilder
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