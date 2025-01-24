<?php
declare(strict_types=1);
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandantController extends Controller
{
    public function index(){
        return view('website.layouts.commandant');
    }
}
