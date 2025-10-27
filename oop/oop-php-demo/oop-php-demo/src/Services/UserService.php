<?php
namespace App\Services;

use App\Models\User;

class UserService
{
    public function printCard(User $user): string
    {
        return sprintf("User: %s | Address: %s", $user->getName(), (string)$user->getAddress());
    }
}
