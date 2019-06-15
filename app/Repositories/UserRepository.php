<?php
namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository
{
    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function all() : Collection
    {
        return $this->model->all();
    }

    public function paginate($perPage = 20) : \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->model
                ->newModelQuery()
                ->latest()
                ->paginate($perPage);
    }
    public function findByUUID(string $uuid) : Model
    {
        return $this->model
            ->newModelQuery()
            ->where('uuid', $uuid)
            ->first();
    }

    public function updateByUUID(string $uuid, array $user) : int
    {
        return $this->model
            ->newModelQuery()
            ->where('uuid', $uuid)
            ->update($user);
    }
}
