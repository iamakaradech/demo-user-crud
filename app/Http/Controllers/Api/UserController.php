<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ApiUserUpdateRequest;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param UserRepository $userRepository
     * @return \Illuminate\Http\Response
     */
    public function index(UserRepository $userRepository)
    {
        return $this->apiSuccess($userRepository->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param UserRepository $userRepository
     * @param $uuid
     * @return void
     */
    public function show(UserRepository $userRepository, $uuid)
    {
        $user = $userRepository->findByUUID($uuid);

        if (! $user) {
            return $this->apiError([
                'message' => 'Cannot find user uuid: ' . $uuid,
            ]);
        }

        return $this->apiSuccess($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ApiUserUpdateRequest $request
     * @param UserRepository $userRepository
     * @param $uuid
     * @return int
     */
    public function update(ApiUserUpdateRequest $request, UserRepository $userRepository, $uuid)
    {
        $payload = $request->except(['uuid', 'id']);
        $payload['date_of_birth'] = Carbon::parse($payload['date_of_birth']);

        if (Str::startsWith($payload['avatar'], 'data:')) {
            $payload['avatar'] = convertBase64ToFile($payload['avatar'], 'users/' . $uuid . '/avatar');
        } else {
            unset($payload['avatar']);
        }

        if (Str::startsWith($payload['cover_photo'], 'data:')) {
            $payload['cover_photo'] = convertBase64ToFile($payload['cover_photo'], 'users/' . $uuid . '/cover_photo');
        } else {
            unset($payload['cover_photo']);
        }

        return $userRepository->updateByUUID($uuid, $payload);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
