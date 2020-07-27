<?php

namespace App\Http\Requests\Demo;

use Illuminate\Foundation\Http\FormRequest;
use Project\Demo\Command\UseCases\DeleteDemo\DeleteDemoInputPort;

class DeleteDemoRequest extends FormRequest implements DeleteDemoInputPort
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return (int) $this->route('id');
    }
}
