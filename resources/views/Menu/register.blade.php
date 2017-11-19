@extends('layouts.principal')
@section('content')
    <link href="{{ URL::asset('css/dropzone.css') }}" rel="stylesheet">

    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"create","id"=>"","title"=>"Registrar menu"])
    </ol>
    <br>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => $path_controller.'.store', 'method' => 'post', "files"=>true,"class"=>"form-horizontal"]) !!}
            <fieldset>
                @include($path_view.".form")
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::file('file') !!}
                        @include("errors.message_error",["var"=>"file"])
                        @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>"Registrar"])
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            {!! Form::open(
            [
            'route' => 'imagen.store',
            'method' => 'post',
            "files"=>true,
            "class"=>"dropzone",
            "id"=>"my-dropzone"
            ]) !!}
            <div class="dz-message" style="height:200px;">
                Drop your files here
            </div>
            <div class="dropzone-previews"></div>
            <button type="submit" class="btn btn-success" id="submit">Save</button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('script')
    {!! Html::script('js/dropzone.js'); !!}
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 1,
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success",
                        myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>
@endsection