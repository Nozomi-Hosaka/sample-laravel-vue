<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api\Demo;

use App\Adapters\UseCases\WriteDemo\CreateDemoModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Demo\CreateDemoRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Project\Demo\Command\UseCases\CreateDemo\CreateDemoInterface;
use Throwable;

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
     * @throws Throwable
     * @return JsonResponse
     */
    public function __invoke(CreateDemoRequest $request)
    {
        $response = new CreateDemoModel();
        DB::beginTransaction();
        try {
            $this->useCase->process($request, $response);
            DB::commit();
        } catch (Throwable $e) {
            // エラー処理など
            DB::rollBack();
            throw $e;
        }
        return response()->json($response->toArray());
    }
}
