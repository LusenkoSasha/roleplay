<?php

namespace App\Service\Cards;

use App\DTO\CardDTO;
use App\DTO\DataDTO;

class BuyerCard extends BaseCard implements CardContract
{
    public function handle(DataDTO $data): CardDTO
    {
        $this->setDefaultFields();
        $this->cardDTO->setPropertyCriteria(
            $this->getRandFieldsToString($this->dataDTO->getPropertyCriteria(), 1)
        );
        $this->cardDTO->setSurfaceMotivation(
            $this->getRandFieldsToString($this->dataDTO->getSurfaceMotivationForBuyers(), 1)
        );
        $this->cardDTO->setHiddenMotivation(
            $this->getRandFieldsToString($this->dataDTO->getHiddenMotivationForBuyers(), 1)
        );
        $this->cardDTO->setRedFlags($this->getRandFieldsToString($this->dataDTO->getRedFlagsBuyer(), 1));

        return $this->cardDTO;
    }
}