<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\HomePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductPage;
use App\Slider;
use App\Warranty;
use App;
use App\Aboutus;
use App\Blog;
use App\Gallery;
use App\Newsletter;
use App\PrivacyPolicy;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_page = HomePage::first();
        $sliders = Slider::all();
        // $categories = Category::orderBy('position', 'asc')->take(6)->get()->toarray();
        $blogs = Blog::orderBy('created_at', 'asc')->take(3)->get();
        // $galleries = Gallery::select('picture')->get();
        $aboutus = Aboutus::first();
       
        return view('frontend.index', compact('home_page','sliders', 'aboutus','blogs'));
    }

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function warranty()
    {
        $warranty = Warranty::first();
        return view('frontend.warranty', compact('warranty'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $privacy = PrivacyPolicy::first();
        return view('frontend.privacy_policy', compact('privacy'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function search(Request $request)
    {
    //   $products = FacadesDB::table('products')
    //     ->where('name', 'LIKE', "%{$request->product_name}%")
    //     ->where('deleted_at', null)
    //     ->paginate(12);
        // dd($products);
        $products = Product::whereTranslationLike('name', "%{$request->product_name}%", \App::getLocale())
        ->where('deleted_at', null)
        ->paginate(12);

        $categories = Category::all();
        return view('frontend.products', compact('products', 'categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function newsletterSubscribe(Request $request)
    {

        Newsletter::create(['email' => $request->newsletter_email]);
        return back()->with('success', 'Thanks for subscibing to NEBO newsletter', 'succes');
    }
}
