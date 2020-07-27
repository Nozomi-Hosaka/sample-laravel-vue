<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api\Demo;

use App\Adapters\UseCases\WriteDemo\UpdateDemoModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Demo\UpdateDemoRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Project\Demo\Command\UseCases\UpdateDemo\UpdateDemoInterface;
use Throwable;

class UpdateDemoAction extends Controller
{
    /**
     * @var UpdateDemoInterface
     */
    private UpdateDemoInterface $updateDemoUseCase;

    /**
     * UpdateDemoAction constructor.
     *
     * @param UpdateDemoInterface $updateDemoUseCase
     */
    public function __construct(UpdateDemoInterface $updateDemoUseCase)
    {
        $this->updateDemoUseCase = $updateDemoUseCase;
    }

    /**
     * Handle the incoming request.
     *
     * @param UpdateDemoRequest $request
     * @throws Throwable
     * @return JsonResponse
     */
    public function __invoke(UpdateDemoRequest $request)
    {
        $output = new UpdateDemoModel();
        DB::beginTransaction();
        try {
            $this->updateDemoUseCase->process($request, $output);
            DB::commit();
        } catch (Throwable $e) {
            // エラー処理など
            DB::rollBack();
            throw $e;
        }
        return response()->json($output->demo()->toArray());
    }
}
