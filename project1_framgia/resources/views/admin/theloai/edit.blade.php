@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chinh sua the loai</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
	            @if ($theloai != null)
	            	{{-- expr --}}
	            
	            	{!! Form::model($theloai, ['class'=>'d', 'route'=>['theloai.update', $theloai->id] ]) !!}
	                    <div class="form-group">
	                        {!! Form::label('Ten', 'Ten') !!}
	                        {!! Form::text('Ten', null, 
	                            ['class'=>'form-control', 
	                                'placeholder'=>"Please Enter Username", 'required']) !!}
	                    </div>
	                    <div class="form-group">
	                        {!! Form::label('TenKhongDau', 'Ten Khong Dau') !!}
	                        {!! Form::text('TenKhongDau', null, 
	                        	['class'=>'form-control',
	                        		'placeholder'=>'Ten Khong Dau', 'required']) !!}
	                    </div>
	                    {{-- <div class="form-group">
	                        <label>Intro</label>
	                        <textarea class="form-control" rows="3" name="txtIntro"></textarea>
	                    </div>
	                    <div class="form-group">
	                        <label>Content</label>
	                        <textarea class="form-control" rows="3" name="txtContent"></textarea>
	                    </div>
	                    <div class="form-group">
	                        <label>Images</label>
	                        <input type="file" name="fImages">
	                    </div>
	                    <div class="form-group">
	                        <label>Product Keywords</label>
	                        <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
	                    </div>
	                    <div class="form-group">
	                        <label>Product Description</label>
	                        <textarea class="form-control" rows="3"></textarea>
	                    </div>
	                    <div class="form-group">
	                        <label>Product Status</label>
	                        <label class="radio-inline">
	                            <input name="rdoStatus" value="1" checked="" type="radio">Visible
	                        </label>
	                        <label class="radio-inline">
	                            <input name="rdoStatus" value="2" type="radio">Invisible
	                        </label>
	                    </div> --}}
	                    {!!Form::submit('Update', ['class'=>'btn btn-primary']) !!}
	                    {!! Form::reset('Reset', ['class'=>'btn -btn-primary']) !!}
	        		{!! Form::close() !!}
	            @endif
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop