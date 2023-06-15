<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::user()->account_type === 'A')   return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'subcategoryId' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'height' => ['required', 'numeric'],
            'width' => ['required', 'numeric'],
            'baseMatireal' => ['string'],
            'lampshadeMaterial' => ['string'],
            'lightSource' => ['required', 'string'],
            'lightSourceConnectors' => ['required', 'string'],
            'lightSourceQuantity' => ['integer'],
            'power' => ['numeric'],
            'price' => ['required', 'numeric'],
            'lumens' => ['numeric'],
            'colorTemperatureMax' => ['numeric'],
            'colorTemperatureMin' => ['numeric'],
            'energyClassOld' => ['string'],
            'energyClassNew' => ['string'],
            'description' => ['string'],
            'img_path' => ['string'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
          'subcategory_id' => $this->subcategoryId,
          'base_material' => $this->baseMaterial,
          'lampshade_material' => $this->lampshadeMateiral,
          'light_source' => $this->lightSource,
          'light_source_connectors' => $this->lightSourceConnectors,
          'light_source_quantity' => $this->lightSourceQuantity,
          'color_temperature_max' => $this->colorTemperatureMax,
          'color_temperature_min' => $this->colorTemperatureMin,
          'energy_class_old' => $this->energyClassOld,
          'energy_class_new' => $this->energyClassNew,
          'img_path' => $this->imgPath
        ]);
    }
}
