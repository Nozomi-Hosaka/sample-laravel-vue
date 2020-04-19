<?php

namespace App\Http\Requests\Demo;

use Illuminate\Foundation\Http\FormRequest;
use Project\Demo\Query\UseCases\GetDemoList\GetDemoQueryInputPort;

class GetDemoRequest extends FormRequest implements GetDemoQueryInputPort
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
     * @inheritDoc
     */
    public function id(): int
    {
        return $this->get('id');
    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return $this->get('name');
    }

    /**
     * @inheritDoc
     */
    public function status(): int
    {
        return $this->get('status');
    }
}
