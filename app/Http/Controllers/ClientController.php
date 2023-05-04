<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\StoreClientsRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ClientController extends Controller
{
    private ClientService $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    /**
     * Display a listing of the resource.
     * @return Client[]|Collection|null
     */
    public function index()
    {
        return $this->clientService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     * @return Client
     */
    public function store(StoreClientRequest $request)
    {
        return $this->clientService->store($request->safe()->only(['name', 'address', 'client_id', 'contracted_at']));
    }

    /**
     * @param StoreClientsRequest $request
     * @return Client[]|Collection|null
     */
    public function batchStore(StoreClientsRequest $request)
    {
        $items = [];

        foreach ($request->validated('clients') as $client) {
            $items[] = $this->clientService->store(Arr::only($client, ['name', 'address', 'client_id', 'contracted_at']));
        }

        return $items;
    }

    /**
     * Display the specified resource.
     * @return Client
     */
    public function show(Client $client)
    {
        return $client;
    }

    /**
     * Update the specified resource in storage.
     * @return Client
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->fill($request->safe()->only(['name', 'address', 'client_id', 'contracted_at']));

        $client->save();

        return $client;
    }

    /**
     * Remove the specified resource from storage.
     * @return Client
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return $client;
    }
}
