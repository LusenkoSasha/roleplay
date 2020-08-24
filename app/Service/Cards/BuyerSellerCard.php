<?php

namespace App\Service\Cards;

use App\DTO\CardDTO;
use App\DTO\DataDTO;

class BuyerSellerCard extends BaseCard implements CardContract
{
    public function handle(DataDTO $data): CardDTO
    {
        $this->setDefaultFields();
        $this->cardDTO->setPropertyCriteria(
            $this->getRandFieldsToString($this->dataDTO->getPropertyCriteria(), 2)
        );
        $this->cardDTO->setSurfaceMotivation(
            $this->getRandFieldsToString($this->dataDTO->getSurfaceMotivationForSellers(), 1)
        );
        $this->cardDTO->setHiddenMotivation(
            $this->getRandFieldsToString(
                $this->dataDTO->getHiddenMotivationForSellers(), 1)
        );

        $redFlags = array_merge($this->dataDTO->getRedFlagsBuyer(), $this->dataDTO->getRedFlagsSeller());
        shuffle($redFlags);
        $this->cardDTO->setRedFlags($this->getRandFieldsToString($redFlags, 1));

        return $this->cardDTO;
    }
}