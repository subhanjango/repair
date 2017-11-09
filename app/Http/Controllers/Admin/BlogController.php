<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Blog;

class BlogController extends Controller
{
    private $__directory;
    private $__module;
    private $__pkey;
    private $__model;

    public function __construct()
    {
        $this->__Module="Blog";
        $this->__Model="Blog";
        $this->__Directory="Admin/blogs";
        $this->__pKey="id";
    }

    public function add(Request $request)
    {

        if ($request->do_post) {
            array_map('trim', $request->all());
            array_map('strip_tags', $request->all());

            $this->validate(request(), [
            'blog_name' => 'required|string',
            'blog_content' => 'required|min:100|max:10000',
            'blog_image'    => 'required|image|mimes:jpeg,bmp,png'
            ]);

            $blog=Blog::create(request()->except('_token'));

            $imageName = time().'.'.request()->blog_image->getClientOriginalExtension();
            request()->blog_image->move(public_path('images'), $imageName);

            Blog::where($this->__pKey, $blog->id)->update(['blog_image'=>$imageName]);
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
        $__dataAssign['Data']=Blog::get();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }

    public function delete($id, Request $request)
    {
        Blog::destroy($id);
        $request->session()->flash('success', 'Data Deleted');
        return back();
    }

    public function edit($id, Request $request)
    {

        if ($request->do_post) {
            $current=$request->current;
            $request->offsetUnset('do_post');
            $request->offsetUnset('current');
            $__dataAssign['Data']=Blog::find($id);

            array_map('trim', $request->all());
            array_map('strip_tags', $request->all());

            $this->validate(request(), [
            'blog_name' => 'required|string',
            'blog_content' => 'required|min:100|max:10000'
            ]);

            $blog=Blog::where($this->__pKey, $current)->update(request()->except('_token'));
            if (!empty($_FILES['blog_image']['name'])) {
                    $imageName = time().'.'.request()->blog_image->getClientOriginalExtension();
                    request()->blog_image->move(public_path('images'), $imageName);

                    Blog::where($this->__pKey, $current)->update(['blog_image'=>$imageName]);
            } else {
                    Blog::where($this->__pKey, $current)->update(['blog_image'=>$__dataAssign['Data']->blog_image]);
            }

            $request->session()->flash('success', 'Data Updated');
            return back();
        }

        $__dataAssign['Module']=$this->__Directory;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Method']="Post";
        $__dataAssign['Action']=\Request::fullUrl();
        $__dataAssign['data']=Blog::find($id);
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }
}
