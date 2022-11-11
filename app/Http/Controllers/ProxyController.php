<?php

namespace App\Http\Controllers;

use App\Services\ProxyService;
use App\Http\Resources\ProxyResource;

class ProxyController extends Controller
{
    private int $count;

    public function __construct()
    {
        $this->count = rand(10,100);
    }

    public function list(ProxyService $proxyService)
    {
        $proxyList = collect($proxyService->get($this->count));

        return ProxyResource::collection($proxyList);
    }
}
