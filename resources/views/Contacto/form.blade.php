
@include(config("options.input_text"),["text_input"=>"nombre_completo","text_label"=>"Nombre Completo","placeholder"=>"Ejemplo: Juan Manuel Perez"])
@include(config("options.input_text"),["text_input"=>"email","text_label"=>"Email","placeholder"=>"Ejemplo: ejemplo@gmail.com"])
@include(config("options.input_select"),["text_input"=>"tipo","text_label"=>"Tipo","array_options"=>config("options.tipo_observaciones")])
@include(config("options.input_textarea"),["text_input"=>"descripcion","text_label"=>"Descripción","placeholder"=>"Descripción"])