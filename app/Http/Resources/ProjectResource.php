<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
                    'id' => $this->id,
                   'skill' => new SkillResource($this->whenLoaded('skill')),
                  'name' => $this->name,
                  'image' => asset('/storage/'. $this->image),
                  'project_url' => $this->project_url,
                 

        ];
    }
}
