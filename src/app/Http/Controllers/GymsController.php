<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gym\TrainerSearchRequest;
use App\Models\Gym;
use App\Models\MatchingCondition;
use App\Repositories\UserRepository;
use App\Repositories\SearchService;

class GymsController extends Controller
{
    /** @var UserRepository  */
    protected $userRepository;
    protected $searchService;

    public function __construct(UserRepository $userRepository, SearchService $searchService)
    {
        $this->userRepository = $userRepository;
        $this->searchService = $searchService;
        $this->authorizeResource(Gym::class);
    }

    public function index()
    {
        return view('pages.gyms.index');
    }

    /**
     * トレーナの一覧表示画面(検索付)
     */
    public function trainerList(TrainerSearchRequest $request)
    {
        $validated = $request->validated();

        if ($request->anyFilled(array_keys($validated))) {
            $conditions = $this->searchService->matchingConditionSearch($request);
        }
        return view('pages.gyms.trainerList', compact('conditions'));
    }
}
