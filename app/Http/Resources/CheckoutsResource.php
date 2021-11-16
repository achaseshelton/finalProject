<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckoutsResource extends JsonResource
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
            'user_id' => $this->user_id,
            'book_id' => $this->book_id,
            'date_checked_out' => $this->date_checked_out,
            'due_date' => $this->due_date,
        ];
    }
}
