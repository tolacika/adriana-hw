<?php

namespace App\Services;

use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

class ClientService
{
    /**
     * @return Client[]|Collection|null
     */
    public function getAll()
    {
        return Client::all();
    }

    /**
     * @param array $validated
     * @return Client
     */
    public function store(array $validated)
    {
        $client = new Client($validated);

        $client->save();

        return $client;
    }
}
