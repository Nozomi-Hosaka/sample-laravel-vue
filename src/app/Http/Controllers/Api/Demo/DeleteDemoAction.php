<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api\Demo;

use App\Adapters\UseCases\WriteDemo\DeleteDemoModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Demo\DeleteDemoRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Project\Demo\Command\UseCases\DeleteDemo\DeleteDemoInterface;
use Throwable;

class DeleteDemoAction extends Controller
{
    /**
     * @var DeleteDemoInterface
     */
    private DeleteDemoInterface $deleteDemoUseCase;

    /**
     * DeleteDemoAction constructor.
     *
     * @param DeleteDemoInterface $deleteDemoUseCase
     */
    public function __construct(DeleteDemoInterface $deleteDemoUseCase)
    {
        $this->deleteDemoUseCase = $deleteDemoUseCase;
    }

    /**
     * Handle the incoming request.
     *
     * @param DeleteDemoRequest $request
     * @throws Throwable
     * @return JsonResponse
     */
    public function __invoke(DeleteDemoRequest $request)
    {
        $output = new DeleteDemoModel();
        DB::beginTransaction();
        try {
            $this->deleteDemoUseCase->process($request, $output);
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            throw $e;
        }
        return response()->json($output->demo()->toArray());
    }
}
