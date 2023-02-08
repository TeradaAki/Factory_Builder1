<?php

namespace App;

interface HouseBuilder
{
    public function BuildDoors(): void;
    public function BuildWindows(): void;
    public function BuildRoof(): void;
    public function BuildFlooring(): void;
    public function BuildFoundation(): void;
}
?>