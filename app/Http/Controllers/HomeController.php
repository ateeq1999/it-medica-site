<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Client;
use App\Product;
use App\Service;
use App\Block;

class HomeController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        $services = Service::all();
        $projects = Category::all();
        $testimonials = Category::all();
        $home = Block::where('name', 'home')->first();
        $service = Block::where('name', 'service')->first();
        $about = Block::where('name', 'about')->first();
        $contactus = Block::where('name', 'contactus')->first();
        $project = Block::where('name', 'about')->first();
        $pricing = Block::where('name', 'service')->first();
        $test  = Block::where('name', 'itro')->first();

        return view('site.home', compact(
            'services', 'clients', 'home', 'service',
            'about', 'projects', 'pricing', 'contactus',
            'testimonials', 'test', 'project'
        ));
    }
    public function folio()
    {
        $clients = Client::all();
        $services = Service::all();
        $blogs = Category::all();
        $projects = Category::all();
        $testimonials = Category::all();
        $home = Block::where('name', 'home')->first();
        $service = Block::where('name', 'service')->first();
        $about = Block::where('name', 'about')->first();
        $contactus = Block::where('name', 'contactus')->first();
        $project = Block::where('name', 'about')->first();
        $pricing = Block::where('name', 'service')->first();
        $test  = Block::where('name', 'itro')->first();

        return view('site.test', compact(
            'services', 'clients', 'home', 'service',
            'about', 'projects', 'pricing', 'contactus',
            'testimonials', 'test', 'project', 'blogs'
        ));
    }

    public function contact_us_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'item_code' => 'required',
        ]);

        $client = Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => 'sudan',
        ]);

        $client->save();

        return redirect()->back();
    }
}
