<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_lists = $this->user->acquisitionUserListPage();

        return response()->json([
            'user_lists' => $user_lists
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_list = $this->user->acquisitionUserInformation($id);

        return response()->json([
            'user_list' => $user_list
        ]);
    }
}
