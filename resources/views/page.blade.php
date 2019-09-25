@extends('layouts.app')
@section("content")
<div class="contenier">
    <div class="mobile">
        @foreach($img as $val)
        @if($val->text === 'mobile')
            <div id="{{$val->id}}" class="imgDiv">
                <button class="delete" onclick="deletePhoto('{{$val->id}}')"><i class="fas fa-times fa-2x"></i></button>
                <img src="{{asset('images/'.$val['href'])}}">
            </div>
            @endif
            @endforeach
    </div>
    <div class="desktop">
        @foreach($img as $val)
            @if($val->text === 'desktop')
                <div id="{{$val->id}}" class="imgDiv">
                    <button class="delete" onclick="deletePhoto('{{$val->id}}')"><i class="fas fa-times fa-2x"></i></button>
                <img src="{{asset('images/'.$val['href'])}}">
                </div>
            @endif
        @endforeach
    </div>
</div>
<script>
   function deletePhoto(id){
       var id = id;
       if(confirm("cankanumeq nasmert jnjel foton?"))
       {   $.get("{{route("deletefoto","")}}/"+id,function () {
           document.getElementById(id).remove();
       })

       }
   }
</script>
@endsection
