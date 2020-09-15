<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Client;
use App\Product;
use App\Profile;
use App\Setting;
use App\Info;
use App\Location;
use App\Order;
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
            'testimonials', 'test', 'project'
        ));
    }

    public function profile()
    {
        if(Profile::first() != null){
            $profile = Profile::first()->load('settings');
        }else{
            $profile = Profile::first();
        }
        
        $categories = Category::all();

        return view('site.pages.profile', compact('categories','profile'));
    }

    public function clients()
    {
        $clients = Client::paginate(8);
        $categories = Category::all();

        return view('site.pages.clients', compact('categories','clients'));
    }

    public function contact_us()
    {
        $info = Info::first();
        
        $awards = [];

        return view('site.pages.contact-us', compact('info'));
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

        $order = Order::create([
            'subject' => $request->subject,
            'message' => $request->message,
            'item_code' => $request->item_code,
            'client_id' => $client->id,
        ]);

        $order->save();

        session()->flash('success',__('site.message_sendded'));

        return redirect()->back();
    }
}
