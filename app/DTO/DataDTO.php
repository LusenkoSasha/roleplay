<?php

namespace App\DTO;

class DataDTO
{
    /**
     * @var array
     */
    public $clientType;

    /**
     * @var array
     */
    public $profession;

    /**
     * @var array
     */
    public $propertyCriteria;

    /**
     * @var array
     */
    public $area;

    /**
     * @var array
     */
    public $familyStatus;

    /**
     * @var array
     */
    public $pets;

    /**
     * @var array
     */
    public $timeFrame;

    /**
     * @var array
     */
    public $surfaceMotivationForBuyers;

    /**
     * @var array
     */
    public $hiddenMotivationForBuyers;

    /**
     * @var array
     */
    public $surfaceMotivationForSellers;

    /**
     * @var array
     */
    public $hiddenMotivationForSellers;

    /**
     * @var array
     */
    public $redFlagsBuyer;

    /**
     * @var array
     */
    public $redFlagsSeller;

    /**
     * @var array
     */
    public $personality;

    /**
     * @var array
     */
    public $propertyCriteriaForBuyerSeller;

    /**
     * @return array
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param array $clientType
     */
    public function setClientType($clientType)
    {
        $this->clientType = $clientType;
    }

    /**
     * @return array
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param array $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return array
     */
    public function getPropertyCriteria()
    {
        return $this->propertyCriteria;
    }

    /**
     * @param array $propertyCriteria
     */
    public function setPropertyCriteria($propertyCriteria)
    {
        $this->propertyCriteria = $propertyCriteria;
    }

    /**
     * @return array
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param array $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return array
     */
    public function getFamilyStatus()
    {
        return $this->familyStatus;
    }

    /**
     * @param array $familyStatus
     */
    public function setFamilyStatus($familyStatus)
    {
        $this->familyStatus = $familyStatus;
    }

    /**
     * @return array
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * @param array $pets
     */
    public function setPets($pets)
    {
        $this->pets = $pets;
    }

    /**
     * @return array
     */
    public function getTimeFrame()
    {
        return $this->timeFrame;
    }

    /**
     * @param array $timeFrame
     */
    public function setTimeFrame($timeFrame)
    {
        $this->timeFrame = $timeFrame;
    }

    /**
     * @return array
     */
    public function getSurfaceMotivationForBuyers()
    {
        return $this->surfaceMotivationForBuyers;
    }

    /**
     * @param array $surfaceMotivationForBuyers
     */
    public function setSurfaceMotivationForBuyers($surfaceMotivationForBuyers)
    {
        $this->surfaceMotivationForBuyers = $surfaceMotivationForBuyers;
    }

    /**
     * @return array
     */
    public function getHiddenMotivationForBuyers()
    {
        return $this->hiddenMotivationForBuyers;
    }

    /**
     * @param array $hiddenMotivationForBuyers
     */
    public function setHiddenMotivationForBuyers($hiddenMotivationForBuyers)
    {
        $this->hiddenMotivationForBuyers = $hiddenMotivationForBuyers;
    }

    /**
     * @return array
     */
    public function getSurfaceMotivationForSellers()
    {
        return $this->surfaceMotivationForSellers;
    }

    /**
     * @param array $surfaceMotivationForSellers
     */
    public function setSurfaceMotivationForSellers($surfaceMotivationForSellers)
    {
        $this->surfaceMotivationForSellers = $surfaceMotivationForSellers;
    }

    /**
     * @return array
     */
    public function getHiddenMotivationForSellers()
    {
        return $this->hiddenMotivationForSellers;
    }

    /**
     * @param array $hiddenMotivationForSellers
     */
    public function setHiddenMotivationForSellers($hiddenMotivationForSellers)
    {
        $this->hiddenMotivationForSellers = $hiddenMotivationForSellers;
    }

    /**
     * @return array
     */
    public function getRedFlagsBuyer()
    {
        return $this->redFlagsBuyer;
    }

    /**
     * @param array $redFlagsBuyer
     */
    public function setRedFlagsBuyer($redFlagsBuyer)
    {
        $this->redFlagsBuyer = $redFlagsBuyer;
    }

    /**
     * @return array
     */
    public function getRedFlagsSeller()
    {
        return $this->redFlagsSeller;
    }

    /**
     * @param array $redFlagsSeller
     */
    public function setRedFlagsSeller($redFlagsSeller)
    {
        $this->redFlagsSeller = $redFlagsSeller;
    }

    /**
     * @return array
     */
    public function getPersonality()
    {
        return $this->personality;
    }

    /**
     * @param array $personality
     */
    public function setPersonality($personality)
    {
        $this->personality = $personality;
    }

    /**
     * @return array
     */
    public function getPropertyCriteriaForBuyerSeller()
    {
        return $this->propertyCriteriaForBuyerSeller;
    }

    /**
     * @param array $propertyCriteriaForBuyerSeller
     */
    public function setPropertyCriteriaForBuyerSeller($propertyCriteriaForBuyerSeller)
    {
        $this->propertyCriteriaForBuyerSeller = $propertyCriteriaForBuyerSeller;
    }
}