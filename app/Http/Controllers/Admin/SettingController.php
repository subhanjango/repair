<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Setting;

class SettingController extends Controller
{
    private $__directory;
    private $__module;
    private $__pkey;
    private $__model;

    public function __construct()
    {
        $this->__Module="Setting";
        $this->__Model="Setting";
        $this->__Directory="Admin";
        $this->__pKey="id";
    }

    public function setting()
    {
        $__dataAssign['Module']=$this->__Directory.'/'.$this->__Module;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Method']="Post";
        $__dataAssign['Action']=strtolower($__dataAssign['Title'].'/update');
        $__dataAssign['data']=Setting::first();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }
    
    public function update(Request $request)
    {
        $__dataAssign['data']=Setting::first();
        array_map('trim', $request->all());
        array_map('strip_tags', $request->all());
                            
        $this->validate(request(), [
        'company_name' => 'required',
        'company_address' => 'required',
        'company_email'    => 'required|email',
        'company_mobile' => 'integer|required',
        'facebook' => 'required',
        'map_url' => 'required',
        'twitter' => 'required',
        'google' => 'required'
        ]);
    

         Setting::where($this->__pKey, 1)->update(request()->except('_token'));
     
        if (!empty($_FILES['logo']['name'])) {
            $imageName = 'logo.'.request()->logo->getClientOriginalExtension();

            request()->logo->move(public_path('images'), $imageName);

            Setting::where($this->__pKey, 1)->update(['logo'=>$imageName]);
        } else {
            Setting::where($this->__pKey, 1)->update(['logo'=>$__dataAssign['data']->logo]);
        }
             $request->session()->flash('success', 'Data Updated');
            return back();
    }
}
