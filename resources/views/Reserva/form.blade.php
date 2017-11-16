@include(config("options.input_text"),["text_input"=>"fecha","text_label"=>"Fecha"])
@include(config("options.input_text"),["text_input"=>"hora","text_label"=>"Hora"])
@include(config("options.input_text"),["text_input"=>"cantidad","text_label"=>"Cantidad"])
@include(config("options.input_text"),["text_input"=>"anticipo","text_label"=>"Anticipo"])
@include(config("options.input_textarea"),["text_input"=>"descripcion","text_label"=>"Descripción"])
@include(config("options.input_select"),["text_input"=>"id_cliente","text_label"=>"Cliente","array_options"=>\App\Cliente::pluck("nombres","id")])
<input type="hidden" name="estado" value="reservado"/>
<input type="hidden" name="saldo" value="0"/>
<input type="hidden" name="total" value="0"/>