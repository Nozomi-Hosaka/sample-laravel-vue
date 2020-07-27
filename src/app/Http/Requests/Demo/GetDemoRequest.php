<?php
declare(strict_types=1);

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
     * {@inheritdoc}
     */
    public function id(): int
    {
        return $this->get('id');
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
        return $this->get('status');
    }
}
