<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gym\TrainerSearchRequest;
use App\Models\Gym;
use App\Models\MatchingCondition;
use App\Repositories\UserRepository;

class GymsController extends Controller
{
    /** @var UserRepository  */
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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
            $conditions = $this->trainerSearch->matchingConditionSearch($request);
        }
        return view('pages.gyms.trainerList', compact('conditions'));
    }
}
