<?php

namespace App\Policies;

use App\Model\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any â products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * @param User $user
     * @param Product $Product
     */
    public function view(User $user, Product $Product)
    {
        //
    }

    /**
     * Determine whether the user can create â products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the â product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $Product
     * @return mixed
     */
    public function update(User $user, Product $Product)
    {
        //
    }

    /**
     * Determine whether the user can delete the â product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $�Product
     * @return mixed
     */
    public function delete(User $user, Product $Product)
    {
        return $user->id === $Product->user_id;
    }

    /**
     * Determine whether the user can restore the â product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $Product
     * @return mixed
     */
    public function restore(User $user, Product $Product)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the â product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $Product
     * @return mixed
     */
    public function forceDelete(User $user, Product $Product)
    {
        //
    }
}
