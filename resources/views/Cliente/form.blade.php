@include(config("options.input_text"),["text_input"=>"nombres","text_label"=>"Nombres","placeholder"=>"Ejemplo: Juan Manuel"])
@include(config("options.input_text"),["text_input"=>"apellido_paterno","text_label"=>"Apellido Paterno","placeholder"=>"Ejemplo: Perez"])
@include(config("options.input_text"),["text_input"=>"apellido_materno","text_label"=>"Apellido Materno","placeholder"=>"Ejemplo: Ramos"])
@include(config("options.input_text"),["text_input"=>"telefono","text_label"=>"Teléfono","placeholder"=>"Ejemplo: 8574586"])
@include(config("options.input_text"),["text_input"=>"email","text_label"=>"Email","placeholder"=>"Ejemplo: email@gmail.com"])

@include(config("options.input_select"),["text_input"=>"pais","text_label"=>"Pais","array_options"=>config("options.paises")])
