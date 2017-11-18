<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\AdminModels\Module;
use App\AdminModels\Service;
use App\AdminModels\ModuleOptions;

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
            $this->validate(request(), [
            'service_id' => 'required|integer',
            'module_title' => 'required|string',
            'module_description' => 'required|min:6|max:200',
            'select_type' => 'required',
            'sort_id' => 'required|integer|min:1',
            'title.*' => 'required',
            'image.*' => 'required|image|mimes:jpeg,bmp,png',
            'cost.*' => 'required'
            ]);

            $createModule=['service_id'=>$request->service_id,
            'module_title'=>$request->module_title,
            'module_description'=>$request->module_description,
            'sort_id'=>$request->sort_id,
            'select_type'=>$request->select_type];


            $module=Module::create($createModule);


            foreach ($request->title as $key => $value) {
                    $imageName = $key.''.time().'.'.request()->image[$key]->getClientOriginalExtension();
                    request()->image[$key]->move(public_path('images'), $imageName);

                    $options=['title'=>$value,
                    'image'=>$imageName,
                    'cost'=>$request->cost[$key],
                    'module_id'=>$module->id];

                    $option=ModuleOptions::create($options);
                    if (Input::get('sub_title_'.$key)) {
                        foreach (Input::get('sub_title_'.$key) as $keys => $values) {
                            $imageName = $keys.''.rand(1, time()).'.'.Input::file('sub_image_'.$key)[$keys]->getClientOriginalExtension();
                            Input::file('sub_image_'.$key)[$keys]->move(public_path('images'), $imageName);

                            $options=['title'=>$values,
                            'image'=>$imageName,
                            'cost'=>Input::get('sub_cost_'.$key)[$keys],
                            'parent_id'=>$option->id,
                            'module_id'=>$module->id];

                            ModuleOptions::create($options);
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
        $__dataAssign['Services']=Service::get();

        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }

    public function list()
    {
        $__dataAssign['Module']=$this->__Directory;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Data']=Module::with('service')->get();

        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }

    public function delete($id, Request $request)
    {
        Module::destroy($id);
        ModuleOptions::where('module_id', $id)->delete();

        $request->session()->flash('success', 'Data Deleted');
        return back();
    }
    public function options(Request $request)
    {
        return ModuleOptions::where('module_id', $request->id)->get();
    }
    public function edit($id, Request $request)
    {

        if ($request->do_post) {
            $this->validate(request(), [
            'service_id' => 'required|integer',
            'module_title' => 'required|string',
            'module_description' => 'required|min:6|max:200',
            'select_type' => 'required',
            'sort_id' => 'required|integer|min:1',
            'title.*' => 'required',
            'image.*' => 'required|image|mimes:jpeg,bmp,png',
            'cost.*' => 'required'
            ]);

            $createModule=['service_id'=>$request->service_id,
            'module_title'=>$request->module_title,
            'module_description'=>$request->module_description,
            'sort_id'=>$request->sort_id,
            'select_type'=>$request->select_type];


            $module=Module::create($createModule);


            foreach ($request->title as $key => $value) {
                    $imageName = $key.''.time().'.'.request()->image[$key]->getClientOriginalExtension();
                    request()->image[$key]->move(public_path('images'), $imageName);

                    $options=['title'=>$value,
                    'image'=>$imageName,
                    'cost'=>$request->cost[$key],
                    'module_id'=>$module->id];

                    $option=ModuleOptions::create($options);
                    if (Input::get('sub_title_'.$key)) {
                        foreach (Input::get('sub_title_'.$key) as $keys => $values) {
                            $imageName = $keys.''.rand(1, time()).'.'.Input::file('sub_image_'.$key)[$keys]->getClientOriginalExtension();
                            Input::file('sub_image_'.$key)[$keys]->move(public_path('images'), $imageName);

                            $options=['title'=>$values,
                            'image'=>$imageName,
                            'cost'=>Input::get('sub_cost_'.$key)[$keys],
                            'parent_id'=>$option->id,
                            'module_id'=>$module->id];

                            ModuleOptions::create($options);
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
        $__dataAssign['Services']=Service::get();
        $__dataAssign['Data']=module::find($id)->with('option')->get();

        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }
}
