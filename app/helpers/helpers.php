<?php
if (!function_exists('getUserRole')) {
    /**
     * Get the user's role.
     *
     * @param  \App\User  $user
     * @return string|null
     */
    function getUserRole($user)
    {
        return $user->role ?? null;
    }
}

if (!function_exists('isAdmin')) {
    /**
     * Check if the user is an admin.
     *
     * @param  \App\User  $user
     * @return bool
     */
    function isAdmin($user)
    {
        return getUserRole($user) === 'admin';
    }
}

if (!function_exists('isStaff')) {
    /**
     * Check if the user is an agent.
     *
     * @param  \App\User  $user
     * @return bool
     */
    function isAgent($user)
    {
        return getUserRole($user) === 'Staff';
    }
}

if (!function_exists('isCustomer')) {
    /**
     * Check if the user is a visitor.
     *
     * @param  \App\User  $user
     * @return bool
     */
    function isVisitor($user)
    {
        return getUserRole($user) === 'Customer';
    }
}

