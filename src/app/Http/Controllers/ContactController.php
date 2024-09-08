<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
        public function index()
        {
            $contact = Contact::with('category')->get();
            $categories = Category::all();
            return view('index',compact('contact', 'categories'));
        }

        public function confirm(Request $request)
        {
            $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'detail', 'building', 'category_id', 'content']);
            return view('confirm', compact('contact'));
        }

        public function store(Request $request)
        {
            $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'detail', 'building', 'category_id', 'content']);
            Contact::create($contact);
            return view('thanks');
        }

        public function admin()
        {
            return view('admin');
        }

        public function register()
        {
            return view('register');
        }

        public function login()
        {
            return view('login');
        }
}
