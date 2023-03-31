<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->clientModel = app(Client::class);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $client = $this->clientModel->create($request->all());
            $route = route('client.qr-code', ['name' => $client->name]);
            return response()->json(['client' => $client, 'route' => $route],200);
        } catch (\Exception $exception){

            return response()->json('error',400);
        }

    }


    /**
     * @param string $name
     * @return JsonResponse
     */
    public function qrCode(string $name)
    {
        try {
            $client = $this->clientModel->where('name', $name)->latest()->first();
            $route = route('client.qr-code', ['name' => $client->name]);
            return response()->json(['client' => $client, 'route' => $route],200);
        } catch (\Exception $exception){

            return response()->json('error',400);
        }
    }

    /**
     * @param string $name
     * @return JsonResponse
     */
    public function show(string $name)
    {
        try {
            $client = $this->clientModel->where('name', $name)->latest()->first();
            return response()->json(['client' => $client],200);
        } catch (\Exception $exception){
            return response()->json('error',400);
        }
    }
}
