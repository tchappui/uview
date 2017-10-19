<?php

function uview(string $_template, array $_data = [], string $_dir = 'templates/')
{
	extract($_data);

	$_data['__parent'] =  null;

	// Starts a block	
	$block = function($name) use(&$_data) {
		ob_start(function($buffer) use(&$name, &$_data) {
			if(empty($_data[$name])) {
				$_data[$name] = $buffer;
			}
			return $_data[$name];
		});
	};
 
	// Ends a block
	$endblock = function() use (&$_data) {
		ob_end_flush();
	};

	// Extends a template
	$extends = function($name) use (&$_data) {
		$_data['__parent'] = $name;
	};
		
	// Rendering of the template
	ob_start();
	require("$_dir$_template.php");
	$_content = trim(ob_get_contents());
	ob_end_clean();
	
	$parent = $_data['__parent'];

	return isset($parent) ? uview($parent, $_data) : $_content;
}
