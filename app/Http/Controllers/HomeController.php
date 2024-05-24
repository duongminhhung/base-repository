<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Prettus\Repository\Exceptions\RepositoryException;

class HomeController extends Controller
{
    public $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @throws RepositoryException
     */
    public function index(){
        return view('welcome');
    }
}
