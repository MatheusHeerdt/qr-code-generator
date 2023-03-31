<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->clientModel = app(Client::class);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $client = $this->clientModel->create($request->all());
        return redirect()->route('client.qr-code', ['name' => $client->name]);
    }


    /**
     * @param string $name
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function qrCode(string $name)
    {
        $client = $this->clientModel->where('name', $name)->latest()->first();

        return view('client.qr-code')->with(['client' => $client]);
    }

    /**
     * @param string $name
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(string $name)
    {
        $client = $this->clientModel->where('name', $name)->latest()->first();

        return view('client.show')->with(['client' => $client]);
    }
}
