<?php 
class TemplateSelectOutputRender extends modTemplateVarOutputRender {

    public function process($value,array $params = array()) {

    	$parsed_value = ($value == 1) ? 'Base Template' : 'Other Template';
    	return '<div class="template">'.$parsed_value.'</div>';
    	
    }
}
return 'TemplateSelectOutputRender';