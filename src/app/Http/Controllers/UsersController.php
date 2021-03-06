<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Gym;
use App\Models\User;
use App\Repositories\UserRepository;

class UsersController extends Controller
{
    /** @var UserRepository  */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * 本登録画面表示
     */
    public function create()
    {
        $occupations = $this->userRepository->getOccupations();
        $areas = $this->userRepository->getAreas();

        return view('pages.users.register', compact('occupations', 'areas'));
    }

    /**
     * 本登録
     * @param RegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterRequest $request)
    {
        // すでにLoginと紐付いていた場合
        if ($request->existsRegisteredUser()) {
            return redirect()->route('login.view', [
                'userType' => 'trainer'
            ]);
        }

        $login = $this->userRepository->create($request);

        auth()->login($login);

        return redirect()->route('trainers.registered');
    }

    /**
     * 編集
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $user = \Auth::user()->user;
        $matchingCondition = $user->matchingCondition;
        return view('pages.users.edit', compact('user', 'matchingCondition'));
    }

    /**
     * @param UpdateRequest $request
     * @param User $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request)
    {
        $model = \Auth::user()->user;
        $this->userRepository->updateUser($request, $model);
        return redirect()->route('settings.profile.update');
    }
}
