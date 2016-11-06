@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
                {{ Form::button('Button', ['onClick'=>'getMessage()', 'class'=>'btn btn-primary']) }}
             
            </div>
        </div>
    </div>
</div>
<script>
    function getMessage(){
        //alert("hello");
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
           type:'POST',
           url:'/getmsg',
           data:'_token = {{ csrf_token()  }}',
           success:function(data){
                alert(data.msg);
                $("#msg").html(data.msg);
           }
        });
     }
</script>
@endsection
