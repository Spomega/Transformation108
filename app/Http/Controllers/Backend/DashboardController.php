<?php

namespace App\Http\Controllers\Backend;
use App\Domains\Auth\Services\UserService;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * DashboardController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }



    public function index()
    {
        $processedUserCount = $this->userService->getUserProcessedCount();

        $processingUserCount = $this->userService->getUserCountInProcessing();

        return view('backend.dashboard')
            ->with('processedUserCount', $processedUserCount)
            ->with('processingUserCount', $processingUserCount);
    }


}
