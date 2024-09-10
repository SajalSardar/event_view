<?php

namespace App\Services\AdminUser;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminUserService
{
    /**
     * Define public method store to save the resourses
     * @param $form
     * @return array|object
     */
    public function store(array|object $request): array|object
    {
        $user = User::factory()->create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
        ]);

        $roleName = Role::query()->where('id', $request->role_id)->first();

        return $user->assignRole($roleName);
    }

    /**
     * Define public method update to update the resourses
     * @param Model $model
     * @param $request
     * @return bool
     */
    public function update(Model $model, $request): bool
    {
        $response = $model->update($request->all());
        return $response;
    }
}
 