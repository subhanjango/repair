<?php

namespace App\Http\Controllers\Frontend;

use Snowfire\Beautymail\Beautymail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Setting;
use App\AdminModels\About;
use App\AdminModels\Testimonials;
use App\AdminModels\Pricing;
use App\AdminModels\Service;
use App\AdminModels\Blog;
use App\AdminModels\Works;
use App\AdminModels\Module;
use App\AdminModels\ModuleOptions;

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
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')-> get();
        $__dataAssign['Testimonials']=Testimonials::orderBy('id','DESC')->get();
        $__dataAssign['Pricing']= Pricing::with('offering')->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);
    }
    public function thankyou(){
       
        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['Setting'] = Setting::first();
        $__dataAssign['About']=About::first();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')->get();
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        $__dataAssign['Testimonials']=Testimonials::orderBy('id','DESC')->get();
        $__dataAssign['Pricing']= Pricing::with('offering')->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);
    }

    public function about(){
        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')->get();
        $__dataAssign['Setting'] = Setting::first();
        $__dataAssign['About'] = About::first();
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);
    }

    public function service($service){
        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')->get();
        $__dataAssign['Setting'] = Setting::first();
        $service = str_replace('-',' ',$service);
        $__dataAssign['This_Service'] = Service::where('service_name',$service)->first();
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);

    }
    public function how_it_works(){
        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')->get();
        $__dataAssign['Setting'] = Setting::first();
        $__dataAssign['Works'] = Works::first();
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);

    }
    public function blog($blog){
        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')->get();
        $__dataAssign['Setting'] = Setting::first();
        $blog = str_replace('-', ' ', $blog);
        $__dataAssign['This_Blog'] = Blog::where('blog_name', $blog)->first();
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);

    }
    public function book(Request $request){
       
        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')->get();
        $__dataAssign['Setting'] = Setting::first();
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);

    }

    public function start_book($service,$id=0){
        $__dataAssign['logo'] = $this->logo();
        $__dataAssign['All_Blog'] = Blog::orderBy('id', 'DESC')->get();
        $__dataAssign['Setting'] = Setting::first();
        $service = str_replace('-', ' ', $service);
        $__dataAssign['This_Service'] = Service::where('service_name', $service)->first();
        $__dataAssign['Service'] = Service::orderBy('id', 'DESC')->get();
        $__dataAssign['Blog'] = Blog::orderBy('id', 'DESC')->limit(3)->get();
        $__dataAssign['Module'] = Module::where('service_id', $__dataAssign['This_Service']->id)->where('id','>',$id)->orderBy('id','ASC')->first();
        if(count($__dataAssign['Module']) == 0){
        return back();    
        }
        $__dataAssign['ModuleOptions'] = ModuleOptions::where('module_id', $__dataAssign['Module']->id)->whereNull('parent_id')->get();


       // echo '<pre>';print_r($__dataAssign['Module']);die;
        return view($this->__Directory . '/' . __FUNCTION__, $__dataAssign);

    }
    public function childModule(Request $request){
        return ModuleOptions::where('parent_id',$request->id)->get();

    }
    public function moduleDetail(Request $request){
        return Module::find($request->id);
    }

    public function packageOrder(Request $request){
        return Pricing::find($request->id);
    }
    public function order(Request $request){
        $options=array();
        $sum = array();
        if(!empty($request->option)){
            foreach ($request->option as $key => $option) {
                $module_option = ModuleOptions::find($option);
                $options[] = $module_option->title;
                $sum[] = $module_option->cost;
            }

        }
        
        
        $Package =  implode(',', $options);
        $data = array();
        $data['email'] = trim($request->email);
        $msg = strip_tags($request->text);
        $Setting = Setting::first();
        $data['logo'] = $this->logo();
        $data['address'] = $Setting->company_address;
        $CompanyName = $Setting->company_name;
        $data['company_name'] = $Setting->company_name;
        $data['company_email'] = $Setting->company_email;
        $data['company_mobile'] = $Setting->company_mobile;
        $data['facebook'] = $Setting->facebook;
        $data['twitter'] = $Setting->twitter;
        $data['google'] = $Setting->google;
        $Price = array_sum($sum);

        $Amount = $Price;

        $data['subject'] = $CompanyName;
        $data['message'] = 'We have recieved your email for :' . $Package . ', Your package amount is $' . $Amount . '. We will contact you as soon as possible.';


        $emailcontent = array(
            'data' => $data
        );
        $email = $data['email'];
        $cemail = $data['company_email'];
        \Mail::send('email.mail', $emailcontent, function ($message) use ($email, $CompanyName,$cemail) {
            $message->to($email)->from($cemail)
                ->subject($CompanyName);
        });

        $data['message'] = 'You have recieved request from ' . $data['email'] . ' for the package:' . $Package . ', the package amount is $' . $Amount . '. Message from client:  
        ' . $msg;

        $emailcontent = array(
            'data' => $data
        );

        $email = $data['company_email'];
        \Mail::send('email.mail', $emailcontent, function ($message) use ($email, $CompanyName,$cemail) {
            $message->to($email)->from($cemail)
                ->subject($CompanyName);
        });

        return redirect(url('final/thankyou'));

    }
    
    public function verifyPromo(Request $request){
        $id = $request->id;
        $promo = $request->promo;
        $Pricing= Pricing::whereHas('codes', function ($query) use ($id,$promo) {
            $query->where('code', $promo)
                  ->where('package_id',$id);
        })->count();
        if($Pricing == 0 ){
            return 'fail';
        }
    }

    public function orderSend(Request $request){
      
        $data= array();
        $data['email'] = trim($request->email);
        $discount_request=$request->discount;
        $msg=strip_tags($request->text);
        $Pricing=Pricing::find($request->id);
        $Setting= Setting::first();
        $data['logo'] = $this->logo();
        $data['address'] = $Setting->company_address;
        $CompanyName = $Setting->company_name;
        $data['company_name'] = $Setting->company_name;
        $data['company_email'] = $Setting->company_email;
        $data['company_mobile'] = $Setting->company_mobile;
        $data['facebook'] = $Setting->facebook;
        $data['twitter'] = $Setting->twitter;
        $data['google'] = $Setting->google;
        $Package = $Pricing->package_name;
        $Price = $Pricing->package_price;
        $Discount = $discount_request == 1 ? $Pricing->discount : 0;

        $Amount = $Price-$Discount;
        
        $data['subject']= $CompanyName;
        $data['message']='We have recieved your email for the package:'. $Package . ', Your package amount is $'. $Amount . '. We will contact you as soon as possible.';
       

            $emailcontent = array(
            'data' => $data
        );
        $email= $data['email'];
        $cemail = $data['company_email'];
            \Mail::send('email.mail', $emailcontent , function ($message) use ($email, $CompanyName,$cemail) {
            $message->to($email)->from($cemail
            )
                ->subject($CompanyName);
        });

        $data['message'] = 'You have recieved request from ' . $data['email'] . ' for the package:' . $Package . ', the package amount is $' . $Amount . '. Message from client:  
        '.$msg;

        $emailcontent = array(
            'data' => $data
        );

        $email = $data['company_email'];
        \Mail::send('email.mail', $emailcontent, function ($message) use ($email, $CompanyName, $cemail) {
            $message->to($email)->from($cemail)
                ->subject($CompanyName);
        });

        
    }
}
