<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JsonException;

class AuthController extends Controller
{
    /**
     * @throws JsonException
     */
    public function login(Request $request): JsonResponse
    {
        \Log::info($request->query());
//        $dataRequest = $request->query();
        $dataRequest = [
            'query_id' => 'AAHiu6sGAAAAAOK7qwY2vPXo',
            'user' => '{"id":111918050,"first_name":"Mohammad","last_name":"Reza ¡","username":"MREP97","language_code":"en","allows_write_to_pm":true}',
            'auth_date' => '1731070155',
            'hash' => '27e39b2fd9a548630b278f7b73c6b4a699dcad36a5391a518379fdd0b1ce3743',
        ];
        $userRequest = json_decode($dataRequest['user'], true, 512, JSON_THROW_ON_ERROR);

        if ($this->isValidTelegramData($dataRequest)) {
            $userModel = User::firstOrCreate([
                'tel_id' => $userRequest['id']
            ]);
            $userModel->update([
                'first_name' => $userRequest['first_name'],
                'last_name' => $userRequest['last_name'],
                'auth_date' => date('Y-m-d', $dataRequest['auth_date']),
            ]);
            Auth::login($userModel);
            return response()->json();
        }

        return response()->json(status: 403);

    }

    private function isValidTelegramData($telegramData = null): bool
    {
        //TODO
        return true;
    }
}
