<?php

namespace App\Services;

use Faker\Factory as Faker;

class ProxyService
{
    public function create(): array
    {
        $faker = Faker::create();

        return [
            'ip' => $faker->ipv4(),
            'port' => $faker->numberBetween(1024,65536),
            'name' => $faker->name(6),
            'password' => $faker->password(),
        ];
    }

    public function get($count): array
    {
        $proxies = [];
        for ($i =0; $i < $count; $i++) {
            $proxies[] = $this->create();
        }

        return $proxies;
    }
}
