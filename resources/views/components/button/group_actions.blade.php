@include("components.button.action",["class"=>"label label-success","action"=>"edit","id"=>$id,"icon"=>"fa fa-pencil"])
@include("components.button.action",["class"=>"label label-info","action"=>"show","id"=>$id,"icon"=>"fa fa-eye"])
@include("components.button.destroy",["class"=>"label label-danger","action"=>"destroy","id"=>$id,"icon"=>"fa fa-remove"])