<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModels\Works;

class WorksController extends Controller
{
    private $__directory;
    private $__module;
    private $__pkey;
    private $__model;

    public function __construct()
    {
        $this->__Module="Works";
        $this->__Model="Works";
        $this->__Directory="Admin\Works";
        $this->__pKey="id";
    }

    public function works()
    {
        $__dataAssign['Module']='How It '.$this->__Module;
        $__dataAssign['Title']=$this->__Module;
        $__dataAssign['Method']="Post";
         $__dataAssign['Action']=\Request::fullUrl().'\add';
        $__dataAssign['data']=Works::first();
        return view($this->__Directory.'/'.__FUNCTION__, $__dataAssign);
    }
    
    public function add(Request $request)
    {
        array_map('trim', $request->all());
        array_map('strip_tags', $request->all());
                            
        $this->validate(request(), [
        'content' => 'required|min:6|max:20000'
        ]);
    

         Works::where($this->__pKey, 1)->update(request()->except('_token'));
     
             $request->session()->flash('success', 'Data Updated');
            return back();
    }
}
