<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'subcategoryId' => $this->subcategory_id,
            'name' => $this->name,
            'height' => $this->height,
            'width' => $this->width,
            'baseMaterial' => $this->base_material,
            'lampshadeMateiral' => $this->lampshade_material,
            'lightSource' => $this->light_source,
            'lightSourceConnectors' => $this->light_source_connectors,
            'lightSourceQuantity' => $this->light_source_quantity,
            'power' => $this->power,
            'price' => $this->price,
            'lumens' => $this->lumens,
            'colorTemperatureMax' => $this->color_temperature_max,
            'colorTemperatureMin' => $this->color_temperature_min,
            'energyClassOld' => $this->energy_class_old,
            'energyClassNew' => $this->energy_class_new,
            'description' => $this->description,
            'imgPath' => $this->img_path
        ];
    }
}
