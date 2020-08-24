<?php

namespace App\Service\Cards;

use App\DTO\CardDTO;
use App\DTO\DataDTO;

class SellerCard extends BaseCard implements CardContract
{
    public function handle(DataDTO $data): CardDTO
    {
        $this->setDefaultFields();
        $this->cardDTO->setPropertyCriteria(
            $this->getRandFieldsToString($this->dataDTO->getPropertyCriteria(), 1)
        );
        $this->cardDTO->setSurfaceMotivation(
            $this->getRandFieldsToString($this->dataDTO->getSurfaceMotivationForSellers(), 1)
        );
        $this->cardDTO->setHiddenMotivation(
            $this->getRandFieldsToString($this->dataDTO->getHiddenMotivationForSellers(), 1)
        );
        $this->cardDTO->setRedFlags(
            $this->getRandFieldsToString($this->dataDTO->getRedFlagsSeller(), 1)
        );

        return $this->cardDTO;
    }
}