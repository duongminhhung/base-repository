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
        dd($this->userRepository->where(['id'=>1])->get());
        return view('welcome');
    }
}
