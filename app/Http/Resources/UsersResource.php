<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'id' => (string)$this->id,
               'attributes' => [
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => $this->password,
                    'card_number' => $this->card_number,
                    'role' => $this->role,
                    'created_at' => $this->created_at,
                    'updated_at' => $this->update_at
                    ]
                ];
    }
}
