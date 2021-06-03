<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function products()
    {
        return view('products');
    }
    public function category()
    {
        return view('category');
    }
    public function orders()
    {
        return view('orders');
    }
    public function customers()
    {
        return view('customers');
    }
    public function products_create()
    {
        return view('create_form.products');
    }
    public function category_create()
    {
        return view('create_form.category');
    }
    public function orders_create()
    {
        return view('create_form.orders');
    }
    public function customers_create()
    {
        return view('create_form.customers');
    }
}