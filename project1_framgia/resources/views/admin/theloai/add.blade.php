@extends('admin.layout.index')

@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr class="odd gradeX" align="center">
                                <td>1</td>
                                <td>Áo Thun Nana</td>
                                <td>200.000 VNĐ</td>
                               
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>Áo Thun Polo</td>
                                <td>250.000 VNĐ</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{ Form::open() }}
                {{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) }}
                {{ Form::button("Click", ['class' => 'btn btn-primary', 'onClick'=>'abc()']) }}
                {{ Form::textarea('textarea', null, []) }}
                <button id="btn" type="button" class="btn btn-primary">Primary</button>
                {{ Form::close() }}
                <!-- /.row -->
            </div>
            <script type="text/javascript">CKEDITOR.replace('textarea');</script>
            <div id="results">
                
            </div>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    
                });

                function abc(){
                    //alert('hello');
                    $.ajax({
                        url: '/demo1',
                        type: 'POST',
                        //dataType: 'json',
                        data: {'email': $('input[name=email]').val(), '_token':$('input[name=_token]').val()},
                    })
                    .done(function(data) {
                        console.log("success");
                        var json = jQuery.parseJSON(data);
                        var arr = '';
                        for (var i=0; i < json.length; ++i)
                        {
                            if(i%2 == 0){
                                arr += '<tr class="odd gradeX" align="center"><td>'+i+'</td>' + '<td>'+json[i].name+'</td>'+'<td>'+json[i].email+'</td></tr>' 
                            }else{
                                arr += '<tr class="even gradeC" align="center"><td>'+i+'</td>' + '<td>'+json[i].name+'</td>'+'<td>'+json[i].email+'</td></tr>' 
                            }
                        }
                        $('#tbody').html(arr);
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
                    
                }
            </script>
            <!-- /.container-fluid -->
        </div>
@endsection
