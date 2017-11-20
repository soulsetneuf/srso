@include(config("options.input_text"),["text_input"=>"nombre","text_label"=>"Nombre","placeholder"=>"Ejemplo: Picante de pollo"])
@include(config("options.input_text"),["text_input"=>"precio_unitario","text_label"=>"Precio Unitario (Bs)","placeholder"=>"Ejemplo: 15"])
@include(config("options.input_textarea"),["text_input"=>"descripcion","text_label"=>"Descripción","placeholder"=>"Ejemplo: Plato en base a carne de llame discada acompañado de papa, maíz, huevo y queso."])
@include(config("options.input_select"),["text_input"=>"id_servicio","text_label"=>"Servicio","array_options"=>\App\Servicio::pluck("nombre","id")])
