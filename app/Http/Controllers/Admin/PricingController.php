<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Pricing;
use App\AdminModels\Offering;
use App\AdminModels\Codes;

class PricingController extends Controller
{

    private $__directory;
    private $__module;
    private $__pkey;
    private $__model;

    public function __construct()
    {
        $this->__Module="Pricing";
        $this->__Model="Pricing";
        $this->__Directory="Admin/Pricing";
        $this->__pKey="id";
    }
    public function add(Request $request)
    {

        if ($request->do_post) {
            $this->validate(request(), [
            'package_price' => 'required|string',
            'package_name' => 'required|string',
            ]);


            $Pricing = new Pricing;
            $Pricing->package_name = $request->package_name;
            $Pricing->package_price = $request->package_price;
            $Pricing->discount = $request->discount;
            $Pricing->save();
            $id = $Pricing->id;
            if (!empty($request->package_offering)) {
                foreach ($request->package_offering as $value) {
                      if($value !=""){
                    $package=array('package_id' => $id,
                    'offering' => $value);
                        Offering::create($package);
                    }
                }
            }

            if (!empty($request->package_code)) {
                foreach ($request->package_code as $value) {
                    if($value !=""){
                    $package=array('type' => 'package',
                    'package_id' => $id,
                    'code' => $value);
                    Codes::create($package);
                    }
                }
            }




            $request->session()->flash('success', 'Data Inserted');
            return back();
        }

        $__dataAssign['Module']=$this->__Directory;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Method']="Post";
        $__dataAssign['Action']=\Request::fullUrl();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }

    public function list()
    {
        $__dataAssign['Module']=$this->__Directory;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Data']=Pricing::get();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }

    public function details(Request $request)
    {

        return Pricing::where($this->__pKey, $request->id)->with('codes', 'offering')->get();
    }

    public function edit($id, Request $request)
    {


        if ($request->do_post) {
            $this->validate(request(), [
            'package_price' => 'required|string',
            'package_name' => 'required|string',
            ]);


            $Pricing = Pricing::find($id);
            $Pricing->package_name = $request->package_name;
            $Pricing->package_price = $request->package_price;
            $Pricing->discount = $request->discount;

            $Pricing->save();
            $id = $Pricing->id;
            if (!empty($request->package_offering)) {
                    Offering::where('package_id', $id)->delete();
                foreach ($request->package_offering as $value) {
                      if($value !=""){
                    $package=array('offering' => $value,'package_id' => $id);
                    Offering::create($package);
                    }
                }
            }

            if (!empty($request->package_code)) {
                    Codes::where('package_id', $id)->delete();
                foreach ($request->package_code as $value) {
                    if($value !=""){
                    $package=array('type' => 'package',
                    'package_id' => $id,
                    'code' => $value);
                    Codes::create($package);
                    }
                }
            }
            $request->session()->flash('success', 'Data Updated');
            return back();
        }

        $__dataAssign['Module']=$this->__Directory;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Method']="Post";
        $__dataAssign['Action']=\Request::fullUrl();
        $__dataAssign['Data']=Pricing::where($this->__pKey, $id)->
        with('codes', 'offering')->get();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }
}
