<?php

class Seed_Clients extends \S2\Seed {

    public function grow()
    {
        $client = new Client;
        $client->name = 'johndoe';
        $client->save();

        $client = new Client;
        $client->name = 'janedoe';
        $client->save();
    }

}