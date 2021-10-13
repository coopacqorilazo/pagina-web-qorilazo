@extends('admin.layouts.dashboard')
@section('css_page')
<script language="JavaScript">
    document.oncontextmenu = function(){return false};
    function loadpdf() {
        
        document.getElementById("pdf").style.display = "block";
        document.getElementById("pdf").style.visibility = "visible";
    }
    document.addEventListener('keyup', colorBlack);
    function colorBlack(e){
        if(e.keyCode == 44){
           copyToClipboard();
       }
    }
    function copyToClipboard() {
      // crear un "hidden" input
      var aux = document.createElement("input");
      // Asignarle el valor del elemento especificado
      aux.setAttribute("value", "No puede capturar imagenes.");
      // Anexar al body
      document.body.appendChild(aux);
      // Resalte su contenido
      aux.select();
      // Copiar el texto resaltado
      document.execCommand("copy");
      // Quitarlo del body
      document.body.removeChild(aux);
      alert(" prohibido por seguridad Print screen esta deshabilitado.");
    }

</script>
@endsection('css_page')
@section('content')
                  
    <div  class=""  style="height: 80vh"
    oncontextmenu="return false;" onkeydown="return false;" onselectstart="return false;" ondragstart="return false;"
    onload="javascript:loadfunctions();">
        <div id="loading" style=" position: absolute; left: 0px; top: 0px; width: 96%; height: 250px;">
            <span class='defaulttext'>Cargando, espere un momento por favor...</span>
        </div>
        <iframe  id="pdf"   src="https://docs.google.com/viewer?srcid=12ToGG6tMi8o6sJws5rqdD_h-Shuoh9J0&pid=explorer&efh=false&a=v&copy=false&chrome=false&embedded=true&zoom=false&scrollbar=0" width="100%" height="680px"></iframe>
    </div>

@endsection('content')
@section('js_page')


@endsection('js_page')
