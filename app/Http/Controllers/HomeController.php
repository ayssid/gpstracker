<?php
/**
 * Created by PhpStorm.
 * User: Yogi
 * Date: 5/31/2016
 * Time: 10:46 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request) {
        return $request->all();
    }
}