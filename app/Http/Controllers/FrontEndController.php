<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Campaign;
use App\Category;
use App\Counter;
use App\Donation;
use App\FAQ;
use App\Gallery;
use App\PageSettings;
use App\Portfolio;
use App\SectionTitles;
use App\Service;
use App\ServiceSection;
use App\Settings;
use App\SplitSection;
use App\Subscribers;
use App\Testimonial;
use App\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontEndController extends Controller
{

    public function __construct()
    {
       
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = SectionTitles::findOrFail(1);
        $categories = Category::orderBy('name','asc')->get();
        $splits = SplitSection::all();
        $fcampaigns = Campaign::where('featured',1)
            ->where('admin_aproved','yes')
            ->where('status','running')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
            $newcampaigns = Campaign::where('status','running')
            ->where('admin_aproved','yes')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
       
        return view('index', compact('categories','languages','splits','fcampaigns','newcampaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function contact()
    {
        $pagedata = PageSettings::find(1);
        return view('contact', compact('pagedata'));
    }

    public function faq()
    {
        $faqs = FAQ::all();
        $pagedata = PageSettings::find(1);
        return view('faq', compact('pagedata','faqs'));
    }

    public function about()
    {
        $pagedata = PageSettings::find(1);
        return view('about', compact('pagedata'));
    }

    public function zakat()
    {
    
        return view('zakat');
    }
    public function cart()
    {
    
        return view('cart');
    }

   
}
