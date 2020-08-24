<?php

namespace App\Service;

use App\DTO\DataDTO;
use App\Service\Cards\BaseCard;
use App\Service\Cards\BuyerCard;
use App\Service\Cards\BuyerSellerCard;
use App\Service\Cards\SellerCard;

class CardTypeFactory
{
    public static function getCardType(DataDTO $dataDTO)
    {
        $randKey = array_rand($dataDTO->getClientType(), 1);

        switch ($dataDTO->getClientType()[$randKey]) {
            case BaseCard::CLIENT_TYPE_BUYER_SELLER:
                return new BuyerSellerCard($dataDTO, BaseCard::CLIENT_TYPE_BUYER_SELLER);
            case BaseCard::CLIENT_TYPE_SELLER :
                return new SellerCard($dataDTO, BaseCard::CLIENT_TYPE_SELLER);
            default:
                return new BuyerCard($dataDTO, BaseCard::CLIENT_TYPE_BUYER);
        }
    }
}