<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function inventory() {
        return view('pages.inventory');
    }
    public function buyACar() {
        return view('pages.buy');
    }
    public function sellACar() {
        return view('pages.sell');
    }
    public function addExpense() {
        return view('pages.addExpense');
    }
}
