<?php
declare(strict_types=1);

namespace App\Http\Requests\Demo;

use Illuminate\Foundation\Http\FormRequest;
use Project\Demo\Command\UseCases\UpdateDemo\UpdateDemoInputPort;

class UpdateDemoRequest extends FormRequest implements UpdateDemoInputPort
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
     * @return int
     */
    public function id(): int
    {
        return (int) $this->route('id');
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return (string) $this->get('name', '') ?? '';
    }
}
