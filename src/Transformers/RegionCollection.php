<?php

namespace Mrlinnth\Mmrc\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Mrlinnth\Mmrc\Transformers\RegionResource;

class RegionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => RegionResource::collection($this->collection),
        ];
    }
}
