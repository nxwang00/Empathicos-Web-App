<?php

namespace App\Http\Controllers\Api\v1\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\User\ShowRequest;
use App\Http\Requests\Api\v1\User\UpdateRequest;
use App\User;

/**
 * Users
 *
 * @package    User Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class UserController extends Controller
{

    public function show(ShowRequest $request, User $user)
    {
        return $request->getUser();
    }

    public function update(UpdateRequest $request, User $user)
    {
        return $request->persist()->getUser();
    }

}
