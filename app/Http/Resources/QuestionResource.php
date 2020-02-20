<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'contact_email' => $this->contact_email,
            'contact_name' => $this->contact_name,
            'content' => $this->content,
            'product_id' => $this->product_id,
            'product_name' => $this->product_name,
            'posted_date' => $this->posted_date,
            'status' => $this->status,
            'storefront_id' => $this->storefront_id,
            'answers' => $this->answers
        ];
    }
}
