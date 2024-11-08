<?php

namespace App\Services;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class RDStationService 
{
    public function sendDealToRDStation(array $data)
    {
        $userId = $this->getUserId();
        $dealData = $this->formatDealData($data);
    
        $dealJson = [
            'deal' => [
                'user_id' => $userId,
                'name' => $dealData['bussiness_name'],
                'phone' => $dealData['phone_number'],
                'stage_id' => $this->getStageId($dealData['bussiness_name']),
                'distribution_settings' => [
                    'owner' => [
                        'type' => 'user',
                        'id' => $userId,
                    ]
                ]
            ]
        ];

        return Http::baseUrl(config('services.rdstation.base_url'))
            ->asForm()
            ->withQueryParameters(['token' => config('services.rdstation.token')])
            ->post('/deals', $dealJson)
            ->throw()
            ->json();
    }

    private function getUsers()
    {
        return Http::baseUrl(config('services.rdstation.base_url'))
            ->asForm()
            ->get('/users', [
                'token' => env('RD_API_TOKEN'),
            ])
            ->throw()
            ->json('users');
    }

    private function getUserID()
    {
        $users = $this->getUsers();

        if (empty($users)) {
            abort(Response::HTTP_NOT_FOUND, 'Usuário não encontrado');
        }

        return $users[0]['id'];
    }
    

    private function formatDealData(array $jsonData)
    {
        $razaoSocial = $jsonData['call-history-was-created']['mailing_data']['data']['razao_social'] ?? '';
        $cidade = $jsonData['call-history-was-created']['mailing_data']['data']['municipio'] ?? '';

        $dealName = "{$razaoSocial} - {$cidade}";

        $numeroTelefone = $jsonData['call-history-was-created']['number'] ?? '';
        if (str_starts_with($numeroTelefone, '55')) {
            $numeroTelefone = substr($numeroTelefone, 2);
        }

        return [
            'bussiness_name' => $dealName,
            'phone_number' => $numeroTelefone,
        ];
    }

    private function getStageId()
    {
        /*não foi finalizada, mas a ideia era puxar todos os 
        id_stages/stages para conseguir adicionar diferentes confingurações*/
        return 'ID_Teste'; 
    }
}
