<?php

namespace App\Http\Controllers\Api\Demo;

use App\Adapters\UseCases\WriteDemo\CreateDemoModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Demo\CreateDemoRequest;
use Illuminate\Http\JsonResponse;
use Project\Demo\Command\UseCases\CreateDemo\CreateDemoInterface;

class CreateDemoAction extends Controller
{
    /**
     * @var CreateDemoInterface
     */
    private CreateDemoInterface $useCase;

    /**
     * CreateDemoAction constructor.
     *
     * @param CreateDemoInterface $useCase
     */
    public function __construct(CreateDemoInterface $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * Handle the incoming request.
     *
     * @param CreateDemoRequest $request
     * @return JsonResponse
     */
    public function __invoke(CreateDemoRequest $request)
    {
        $response = new CreateDemoModel();
        $this->useCase->process($request, $response);
        return response()->json($response->toArray());
    }
}
