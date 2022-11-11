<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string ip
 * @property integer port
 * @property string name
 * @property string password
 */
class ProxyResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'ip' => $this->resource['ip'],
            'port' => $this->resource['port'],
            'name' => $this->resource['name'],
            'password' => $this->resource['password'],
        ];
    }
}
