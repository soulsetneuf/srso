@include(config("options.input_text"),["text_input"=>"nombre","text_label"=>"Nombre"])
@include(config("options.input_text"),["text_input"=>"precio_unitario","text_label"=>"Precio Unitario"])
@include(config("options.input_textarea"),["text_input"=>"descripcion","text_label"=>"Descripción"])
@include(config("options.input_select"),["text_input"=>"id_servicio","text_label"=>"Servicio","array_options"=>\App\Servicio::pluck("nombre","id")])