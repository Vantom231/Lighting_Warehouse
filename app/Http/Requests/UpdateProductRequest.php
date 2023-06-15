<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProductRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
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
        } else {
            return [
                'subcategoryId' => ['sometimes', 'required', 'integer'],
                'name' => ['sometimes', 'required', 'string'],
                'height' => ['sometimes', 'required', 'numeric'],
                'width' => ['sometimes', 'required', 'numeric'],
                'baseMatireal' => ['sometimes', 'string'],
                'lampshadeMaterial' => ['sometimes', 'string'],
                'lightSource' => ['sometimes', 'required', 'string'],
                'lightSourceConnectors' => ['sometimes', 'required', 'string'],
                'lightSourceQuantity' => ['sometimes', 'integer'],
                'power' => ['sometimes', 'numeric'],
                'price' => ['sometimes', 'required', 'numeric'],
                'lumens' => ['sometimes', 'numeric'],
                'colorTemperatureMax' => ['sometimes', 'numeric'],
                'colorTemperatureMin' => ['sometimes', 'numeric'],
                'energyClassOld' => ['sometimes', 'string'],
                'energyClassNew' => ['sometimes', 'string'],
                'description' => ['sometimes', 'string'],
                'img_path' => ['sometimes', 'string'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->subcategoryId) $this->merge(['subcategory_id' => $this->subcategoryId]);
        if ($this->baseMaterial) $this->merge(['base_material' => $this->baseMaterial]);
        if ($this->lampshadeMateiral) $this->merge(['lampshade_material' => $this->lampshadeMateiral]);
        if ($this->lightSource) $this->merge(['light_source' => $this->lightSource]);
        if ($this->lightSourceConnectors) $this->merge(['light_source_connectors' => $this->lightSourceConnectors]);
        if ($this->lightSourceQuantity) $this->merge(['light_source_quantity' => $this->lightSourceQuantity]);
        if ($this->colorTemperatureMax) $this->merge(['color_temperature_max' => $this->colorTemperatureMax]);
        if ($this->colorTemperatureMin) $this->merge(['color_temperature_min' => $this->colorTemperatureMin]);
        if ($this->energyClassOld) $this->merge(['energy_class_old' => $this->energyClassOld]);
        if ($this->energyClassNew) $this->merge(['energy_class_new' => $this->energyClassNew]);
        if ($this->imgPath) $this->merge(['img_path' => $this->imgPath]);
    }
}
