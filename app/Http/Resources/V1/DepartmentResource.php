<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'schoolId' => $this->schoolid,
            'totalNoOfMedals' => $this->totalnoofmedals,
            'status'=> $this->status,
            'createdBy'=> $this->created_by,
        ];
    }
}
