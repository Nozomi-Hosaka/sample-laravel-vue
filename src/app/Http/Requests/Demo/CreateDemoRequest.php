<?php
declare(strict_types=1);

namespace App\Http\Requests\Demo;

use Illuminate\Foundation\Http\FormRequest;
use Project\Demo\Command\UseCases\CreateDemo\CreateDemoInputPort;
use Project\Demo\DemoStatus;

class CreateDemoRequest extends FormRequest implements CreateDemoInputPort
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
            'name' => 'required|string|max:256',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '名称は必須です。',
            'name.string' => '名称は文字列で入力してください。',
            'name.max' => '名称は256文字で入力して下さい。',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return $this->get('name');
    }

    /**
     * {@inheritdoc}
     */
    public function status(): int
    {
        return $this->get('status', DemoStatus::STATUS_ENABLED);
    }
}
