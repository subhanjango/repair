<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Testimonials;

class TestimonialController extends Controller
{
    private $__directory;
    private $__module;
    private $__pkey;
    private $__model;

    public function __construct()
    {
        $this->__Module="Testimonial";
        $this->__Model= "Testimonial";
        $this->__Directory= "Admin/testimonial";
        $this->__pKey="id";
    }

    public function add(Request $request)
    {

        if ($request->do_post) {
            array_map('trim', $request->all());
            array_map('strip_tags', $request->all());

            $this->validate(request(), [
            'client_name' => 'required|string',
            'designation' => 'required',
            'review' => 'required',
            'review' => 'required',
            'image'    => 'required|image|mimes:jpeg,bmp,png'
            ]);

            $Testimonials = Testimonials::create(request()->except('_token'));

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);

            Testimonials::where($this->__pKey, $Testimonials->id)->update(['image'=>$imageName]);
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
        $__dataAssign['Data']=Testimonials::get();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }

    public function delete($id, Request $request)
    {
        Testimonials::destroy($id);
        $request->session()->flash('success', 'Data Deleted');
        return back();
    }

    public function edit($id, Request $request)
    {

        if ($request->do_post) {
            $request->offsetUnset('do_post');
            $__dataAssign['Data']= Testimonials::find($id);

            /* array_map('trim', $request->all());
            array_map('strip_tags', $request->all()); */

            $this->validate(request(), [
                'client_name' => 'required|string',
                'designation' => 'required',
                'review' => 'required',
                'review' => 'required'
            ]);

            $Testimonials = Testimonials::where($this->__pKey, $id)->update(request()->except('_token'));
            if (!empty($_FILES['image']['name'])) {
                    $imageName = time().'.'.request()->image->getClientOriginalExtension();
                    request()->image->move(public_path('images'), $imageName);

                Testimonials::where($this->__pKey, $id)->update(['image'=>$imageName]);
            } else {
                Testimonials::where($this->__pKey, $id)->update(['image'=>$__dataAssign['Data']->image]);
            }

            $request->session()->flash('success', 'Data Updated');
            return back();
        }

        $__dataAssign['Module']=$this->__Directory;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Method']="Post";
        $__dataAssign['Action']=\Request::fullUrl();
        $__dataAssign['Data']= Testimonials::find($id);
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }
}
