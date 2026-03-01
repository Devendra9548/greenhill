<?php

namespace App\Services;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetService
{
    public function addRow($data)
    {
        $client = new Client();
        $client->setApplicationName('Laravel 12 Sheet');
        $client->setScopes([Sheets::SPREADSHEETS]);
        $client->setAuthConfig(storage_path('app/google-sheet.json'));
        $client->setAccessType('offline');

        $service = new Sheets($client);

        $spreadsheetId = "1azxSXUvmeySH2AGUjzIHhyghkVZFgsjuFT4D3NzTlrQ";
        $range = "Sheet1!A1";

        $body = new Sheets\ValueRange([
            'values' => [$data]
        ]);

        $params = ['valueInputOption' => 'RAW'];

        $service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
    }
}