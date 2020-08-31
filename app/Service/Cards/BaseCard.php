<?php

namespace App\Service\Cards;

use App\DTO\CardDTO;
use App\DTO\DataDTO;

class BaseCard
{
    const CLIENT_TYPE_BUYER = "Buyer";
    const CLIENT_TYPE_SELLER = "Seller";
    const CLIENT_TYPE_BUYER_SELLER = "Buyer/Seller";

    public $cardDTO;
    public $dataDTO;

    public function __construct(DataDTO $dataDTO, string $clientType)
    {
        $this->dataDTO = $dataDTO;
        $this->cardDTO = new CardDTO();
        $this->cardDTO->setClientType($clientType);
    }

    public function setDefaultFields()
    {
        $this->cardDTO->setPreApproved($this->getRandFieldsToString($this->dataDTO->getPreApproved(), 1));
        $this->cardDTO->setPersonality($this->getRandFieldsToString($this->dataDTO->getPersonality(), 1));
        $this->cardDTO->setPets($this->getRandFieldsToString($this->dataDTO->getPets(), 1));
        $this->cardDTO->setFamilyStatus($this->getRandFieldsToString($this->dataDTO->getFamilyStatus(), 1));
        $this->cardDTO->setTimeFrame($this->getRandFieldsToString($this->dataDTO->getTimeFrame(), 1));
        $this->cardDTO->setArea($this->getRandFieldsToString($this->dataDTO->getArea(), 1));
        $this->cardDTO->setProfession($this->getRandFieldsToString($this->dataDTO->getProfession(), 1));
    }

    public function getRandFieldsToString(array $field, int $num)
    {
        $keys = array_rand($field, $num);
        $values = [];
        if (is_int($keys)) {
            return $field[$keys];
        } else {
            foreach ($keys as $key) {
                array_push($values, $field[$key]);
            }

            return implode($values, ", ");
        }
    }

}