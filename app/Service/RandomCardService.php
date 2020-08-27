<?php

namespace App\Service;

use App\DTO\CardDTO;
use App\DTO\DataDTO;
use Google_Service_Sheets;

class RandomCardService
{
    public function getData()
    {
        $data = $this->getDataFromSheet();
        $cardType = CardTypeFactory::getCardType($data);
        $card = $cardType->handle($data);

        echo json_encode($this->jsonSerialize($card));
    }

    private function jsonSerialize(CardDTO $cardDTO)
    {
        return [
            "client_type" => $cardDTO->getClientType(),
            "personality" => $cardDTO->getPersonality(),
            "profession" => $cardDTO->getProfession(),
            "property_criteria" => $cardDTO->getPropertyCriteria(),
            "area" => $cardDTO->getArea(),
            "time_frame" => $cardDTO->getTimeFrame(),
            "family_status" => $cardDTO->getFamilyStatus(),
            "pets" => $cardDTO->getPets(),
            "surface_motivation" => $cardDTO->getSurfaceMotivation(),
            "hidden_motivation" => $cardDTO->getHiddenMotivation(),
            "red_flags" => $cardDTO->getRedFlags()
        ];
    }

    private function getDataFromSheet(): DataDTO
    {
        $googleApi = new GoogleApi();

        try {
            $client = $googleApi->getClient();
            $service = new Google_Service_Sheets($client);
            $spreadsheetId = '14EUACwmyBa5UWWIiLL3VQCtY3KvsoQs94Tvzdgw1UzA';
            $range = 'Sheet1!A1:01000';
            $response = $service->spreadsheets_values->get($spreadsheetId, $range, ["majorDimension" => "COLUMNS"]);
            $values = $response->getValues();
            return $this->convertData($values);
        } catch (\Exception $e) {
        }

        return new DataDTO();
    }

    private function convertData(array $data): DataDTO
    {
        $dataDTO = new DataDTO();

        foreach ($data as $key => $item) {
            $header = preg_replace('/[^A-Za-z0-9\-]/', '', array_shift($item));
            $method = str_replace(' ', '', "set" . ucwords($header));
            if(method_exists($dataDTO,$method)){
                $dataDTO->$method($item);
            }
        }

        return $dataDTO;
    }
}