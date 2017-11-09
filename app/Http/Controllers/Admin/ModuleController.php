<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Module;

class ModuleController extends Controller
{
    private $__directory;
    private $__module;
    private $__pkey;
    private $__model;

    public function __construct()
    {
        $this->__Module="Modules";
        $this->__Model="Module";
        $this->__Directory="Admin/modules";
        $this->__pKey="id";
    }

    public function add(Request $request)
    {

        if ($request->do_post) {
            array_map('trim', $request->all());
            array_map('strip_tags', $request->all());

            $this->validate(request(), [
            'service_name' => 'required|string',
            'service_about' => 'required|min:100|max:10000',
            'service_image'    => 'required|image|mimes:jpeg,bmp,png'
            ]);

            $service=Service::create(request()->except('_token'));

            $imageName = time().'.'.request()->service_image->getClientOriginalExtension();
            request()->service_image->move(public_path('images'), $imageName);

            Service::where($this->__pKey, $service->id)->update(['service_image'=>$imageName]);
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
        $__dataAssign['Data']=Service::get();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }

    public function delete($id, Request $request)
    {
        Service::destroy($id);
        $request->session()->flash('success', 'Data Deleted');
        return back();
    }

    public function edit($id, Request $request)
    {

        if ($request->do_post) {
            $current=$request->current;
            $request->offsetUnset('do_post');
            $request->offsetUnset('current');
            $__dataAssign['Data']=Service::find($id);

            array_map('trim', $request->all());
            array_map('strip_tags', $request->all());

            $this->validate(request(), [
            'service_name' => 'required|string',
            'service_about' => 'required|min:100|max:10000'
            ]);

            $service=Service::where($this->__pKey, $current)->update(request()->except('_token'));
            if (!empty($_FILES['service_image']['name'])) {
                    $imageName = time().'.'.request()->service_image->getClientOriginalExtension();
                    request()->service_image->move(public_path('images'), $imageName);

                    Service::where($this->__pKey, $current)->update(['service_image'=>$imageName]);
            } else {
                    Service::where($this->__pKey, $current)->update(['service_image'=>$__dataAssign['Data']->service_image]);
            }

            $request->session()->flash('success', 'Data Updated');
            return back();
        }

        $__dataAssign['Module']=$this->__Directory;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Method']="Post";
        $__dataAssign['Action']=\Request::fullUrl();
        $__dataAssign['data']=Service::find($id);
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }
}
