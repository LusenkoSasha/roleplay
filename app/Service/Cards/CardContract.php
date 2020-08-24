<?php

namespace App\Service\Cards;

use App\DTO\CardDTO;
use App\DTO\DataDTO;

interface CardContract
{
    public function handle(DataDTO $data): CardDTO;
}