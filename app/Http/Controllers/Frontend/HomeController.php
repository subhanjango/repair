<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Setting;
use App\AdminModels\About;
use App\AdminModels\Testimonials;
use App\AdminModels\Pricing;
use App\AdminModels\Service;
use App\AdminModels\Blog;

class HomeController extends Controller
{
    private $__directory;
    private $__module;
  

    public function __construct()
    {
        $this->__Module = "Index";
        $this->__Directory = "Frontend";
       
    }

    public function index(){

        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['Setting'] = Setting::first();
        $__dataAssign['About']=About::first();
        $__dataAssign['Testimonials']=Testimonials::orderBy('id','DESC')->get();
        $__dataAssign['Service']= Service::orderBy('id','DESC')->get();
        $__dataAssign['Pricing']= Pricing::with('offering')->get();
        $__dataAssign['Blog']= Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);
    }
}
