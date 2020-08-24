<?php

namespace App\DTO;

class CardDTO
{
    /**
     * @var string|null
     */
    private $clientType;

    /**
     * @var string|null
     */
    private $personality;

    /**
     * @var string|null
     */
    private $propertyCriteria;

    /**
     * @var string|null
     */
    private $profession;

    /**
     * @var string|null
     */
    private $area;

    /**
     * @var string|null
     */
    private $familyStatus;

    /**
     * @var string|null
     */
    private $pets;

    /**
     * @var string|null
     */
    private $timeFrame;

    /**
     * @var string|null
     */
    private $surfaceMotivation;

    /**
     * @var string|null
     */
    private $hiddenMotivation;

    /**
     * @var string|null
     */
    private $redFlags;

    /**
     * @return string|null
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param string|null $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return string|null
     */
    public function getFamilyStatus()
    {
        return $this->familyStatus;
    }

    /**
     * @param string|null $familyStatus
     */
    public function setFamilyStatus($familyStatus)
    {
        $this->familyStatus = $familyStatus;
    }

    /**
     * @return string|null
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * @param string|null $pets
     */
    public function setPets($pets)
    {
        $this->pets = $pets;
    }

    /**
     * @return string|null
     */
    public function getTimeFrame()
    {
        return $this->timeFrame;
    }

    /**
     * @param string|null $timeFrame
     */
    public function setTimeFrame($timeFrame)
    {
        $this->timeFrame = $timeFrame;
    }

    /**
     * @return string|null
     */
    public function getSurfaceMotivation()
    {
        return $this->surfaceMotivation;
    }

    /**
     * @param string|null $surfaceMotivation
     */
    public function setSurfaceMotivation($surfaceMotivation)
    {
        $this->surfaceMotivation = $surfaceMotivation;
    }

    /**
     * @return string|null
     */
    public function getHiddenMotivation()
    {
        return $this->hiddenMotivation;
    }

    /**
     * @param string|null $hiddenMotivation
     */
    public function setHiddenMotivation($hiddenMotivation)
    {
        $this->hiddenMotivation = $hiddenMotivation;
    }

    /**
     * @return string|null
     */
    public function getRedFlags()
    {
        return $this->redFlags;
    }

    /**
     * @param string|null $redFlags
     */
    public function setRedFlags($redFlags)
    {
        $this->redFlags = $redFlags;
    }

    /**
     * @return string|null
     */
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @param string|null $profession
     */
    public function setProfession(string $profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return string|null
     */
    public function getPropertyCriteria(): string
    {
        return $this->propertyCriteria;
    }

    /**
     * @param string|null $propertyCriteria
     */
    public function setPropertyCriteria(string $propertyCriteria)
    {
        $this->propertyCriteria = $propertyCriteria;
    }

    /**
     * @return string|null
     */
    public function getPersonality(): string
    {
        return $this->personality;
    }

    /**
     * @param string|null $personality
     */
    public function setPersonality(string $personality)
    {
        $this->personality = $personality;
    }

    /**
     * @return string|null
     */
    public function getClientType(): string
    {
        return $this->clientType;
    }

    /**
     * @param string|null $clientType
     */
    public function setClientType(string $clientType)
    {
        $this->clientType = $clientType;
    }
}