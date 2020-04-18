<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Adapters\UseCases\ReadDemo\ReadDemoListModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetDemoRequest;
use Illuminate\Http\JsonResponse;
use Project\Demo\Query\UseCases\GetDemoList\GetDemoQueryInterface;

class GetApiDemoAction extends Controller
{
    /**
     * @var GetDemoQueryInterface
     */
    private GetDemoQueryInterface $useCase;

    /**
     * GetApiDemoAction constructor.
     *
     * @param GetDemoQueryInterface $useCase
     */
    public function __construct(GetDemoQueryInterface $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * Handle the incoming request.
     *
     * @param GetDemoRequest $request
     * @return JsonResponse
     */
    public function __invoke(GetDemoRequest $request)
    {
        $readModel = new ReadDemoListModel();
        $this->useCase->process($request, $readModel);
        return response()->json($readModel->toArray());
    }
}
