<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Normativa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Response;


class AdminNormativeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        Auth::check();
    }
    
    public function index()
    {
        $this->authorize('haveaccess','normative.index');
        $normatives = Normativa::all();
        return view('admin.normative.index',compact('normatives'));
    }

    
    public function create()
    {    
        $this->authorize('haveaccess','normative.create');    
        return view('admin.normative.create');
    }

    
    public function store(Request $request)
    {
        $this->authorize('haveaccess','normative.create');
        $max_size=(int) ini_get('upload_max_filesize')*10240;
        $file = $request->file('file');
        $data=request()->all();
        $user_id = Auth::id();
        $request->validate([
            'numero'        => 'required|max:50|unique:roles,name',
            'descripcion'   => 'required|max:150,slug'
        ]);
        if ($request->hasFile('file')) {            
            if(Storage::putFileAs('/private/pdf/',$file,$file->getClientOriginalName())){
                Normativa::create([
                    'numero'=>$data['numero'],
                    'version'=>$data['version'],
                    'descripcion'=>$data['descripcion'],
                    'tipo'=>$data['tipo'],
                    'estado'=>$data['estado'],
                    'proceso'=>$data['proceso'],
                    'fechapublicacion'=>$data['fechapublicacion'],
                    'fechaemision'=>$data['fechaemision'],
                    'urldocumento'=>$file->getClientOriginalName(),
                ]);
            } 
        }
        //return back();
        //return redirect()->action('NormativeController@index');
        return redirect()->route('admin.normative.index')
            ->with('status_success','Normative saved successfully');
    }

    
    public function show(Normativa $normative)
    {
        $this->authorize('haveaccess','normative.show');
        //$this->authorize('view', [$normativa, ['admin.normative.show'] ]);
       // $normative= Normativa::orderBy('id')->get();
        return view('admin.normative.view',compact('normative'));
    }

    public function showFile($id){
        $this->authorize('haveaccess','normative.showfile');
        $file = Normativa::whereId($id)->firstOrFail();
        $path =storage_path(). '/app/private/pdf/'.$file->urldocumento;             
        /*$response = Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename= "'.$file->numero.'"'
        ]);*/
        
        //$path = '/var/www/YOURWEBSITE/app/Assets/Images/'.$filename;
          $type = "application/pdf";
          header('Content-Type:'.$type);
          header('Content-Length: ' . filesize($path));
          readfile($path);

        //$response->header('Content-Type', 'application/pdf');
        //return $response;
        //return $response;
        //dd($response);
        
    }

    public function viewpdf($idf){
        return view('admin.normative.visor',compact('idf'));
    }
   
    public function edit(Normativa $normative)
    {
        $this->authorize('haveaccess','normative.edit');
        return view('admin.normative.edit', compact('normative'));         
    }

   
    public function update(Request $request, Normativa $normative)
    {
        $this->authorize('haveaccess','normative.edit');
        $max_size=(int) ini_get('upload_max_filesize')*10240;
        $file = $request->file('file');
        $data=request()->all();
        $user_id = Auth::id();
        $request->validate([
            'numero'        => 'required|max:50|unique:roles,name,'.$normative->id,
            'descripcion'   => 'required|max:150,slug,'.$normative->id
        ]);

        $document=$normative->urldocumento;
        if ($request->hasFile('file')) {            
            if(Storage::putFileAs('/private/pdf/',$file,$file->getClientOriginalName())){                
                $document=$file->getClientOriginalName();                
            } 
        }     
        $normative->update([
            'numero'=>$data['numero'],
            'version'=>$data['version'],
            'descripcion'=>$data['descripcion'],
            'tipo'=>$data['tipo'],
            'estado'=>$data['estado'],
            'proceso'=>$data['proceso'],
            'fechapublicacion'=>$data['fechapublicacion'],
            'fechaemision'=>$data['fechaemision'],            
            'urldocumento'=>$document,
        ]);
        return redirect()->route('admin.normative.index')
            ->with('status_success','Normative saved successfully');
    }

    
    public function destroy(Normativa $normativa)
    {
        $this->authorize('haveaccess','normative.destroy');
    }
}
