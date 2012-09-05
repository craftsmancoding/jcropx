<?php

class TemplateSelectInputRender extends modTemplateVarInputRender {

    public function getTemplate() {
    	//used templateselect2.tpl to change the template with plain input and custom style
        return $this->modx->getOption('core_path').'components/ourtvs/tv/input/tpl/templateselect.tpl';
    }

    public function process($value,array $params = array()) {
 		
    }
}
return 'TemplateSelectInputRender';