@extends('master-layout')


@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Add New TASK</h3>

            <div class="col-md-1">
                <a href="{{ url('admin/todo') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="NEW task" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
            </div>

        </div>
        <hr>

        <div class="row mt">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>#&nbsp;{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-6 col-sm-8 col-lg-8">


                {!! Form::open(array('action'=>'Admin\Todo\todoController@store' , 'class'=>'form-horizontal style-form form-panel' , 'novalidate'=>'novalidate' ,  'files'=>true)) !!}




                <div class="form-group">
                    {!! Form::label('Name'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('name' , null , ['class'=>'form-control' , 'placeholder' =>'Task Name']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('details'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::textarea('details' , null , ['class'=>'form-control' , 'placeholder' =>'']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Priority'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::select('priority' , ['1'=>'High' , '2'=>'Medium' , '3'=>'Low'] , ['class'=>'form-control' ]) !!}


                    </div>
                </div>




                <div class="form-group">


                    <div class="col-sm-10">
                        {!! Form::submit('Save' ,  array('class'=>'btn btn-theme03 btn-lg col-md-offset-7')) !!}


                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>



    </section>
</section>
@stop