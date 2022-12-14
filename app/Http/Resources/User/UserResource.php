<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "ulid" => $this->ulid,
            "name" => $this->name,
            "email" => $this->email,
            "roles" => [$this->role_id],
            "status" => $this->status,
        ];
    }
}
