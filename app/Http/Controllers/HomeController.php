<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Client;
use App\Product;
use App\Project;
use App\Service;
use App\Block;
use App\Blog;

class HomeController extends Controller
{

    public function home()
    {
        $clients = Client::all();
        $services = Service::all();
        $blogs = Blog::paginate(3);
        $projects = Project::all();
        $testimonials = Category::all();
        $home = Block::where('name', 'home')->first();
        $service = Block::where('name', 'service')->first();
        $about = Block::where('name', 'about')->first();
        $contactus = Block::where('name', 'contactus')->first();
        $project = Block::where('name', 'project')->first();
        $pricing = Block::where('name', 'service')->first();
        $test  = Block::where('name', 'intro')->first();
        $blog  = Block::where('name', 'blog')->first();

        return view('site.test', compact(
            'services', 'clients', 'home', 'service',
            'about', 'projects', 'pricing', 'contactus',
            'testimonials', 'test', 'project', 'blogs', 'blog'
        ));
    }

    public function projects()
    {
        $projects = Project::all();

        $project = Block::where('name', 'project')->first();

        return view('site.protofolio', compact(
            'projects', 'project'
        ));
    }

    public function show_blog(Blog $blog)
    {
        $blogs = Blog::all();
        
        $categories = Category::all();

        return view('site.blog', compact(
            'blog', 'blogs', 'categories'
        ));
    }

    public function blogs()
    {
        $blogs = Blog::latest('created_at')->paginate(9);

        $blog_block = Block::where('name', 'blog')->first();

        return view('site.blogs', compact(
            'blogs', 'blog_block'
        ));
    }

}
