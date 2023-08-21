<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'userId'=> $this->user_id,
            'amount'=> $this->amount,
            'type'=>$this->type,
            'receiver'=>$this->receiver,
            'time'=>$this->time,
        ];
    }
}
