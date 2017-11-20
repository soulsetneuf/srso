@include(config("options.input_select"),["text_input"=>"id_cliente","text_label"=>"Cliente","array_options"=>\App\Cliente::pluck("nombres","id")])
@include(config("options.input_date"),["text_input"=>"fecha","text_label"=>"Fecha"])
@include(config("options.input_hour"),["text_input"=>"hora","text_label"=>"Hora"])
@include(config("options.input_text"),["text_input"=>"cantidad","text_label"=>"Cantidad","placeholder"=>"Ejemplo: 10"])
@include(config("options.input_textarea"),["text_input"=>"descripcion","text_label"=>"Descripción"])

<input type="hidden" name="anticipo" value="0"/>
<input type="hidden" name="estado" value="pendiente"/>
<input type="hidden" name="saldo" value="0"/>
<input type="hidden" name="total" value="0"/>