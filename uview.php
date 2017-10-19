<?php

/**
 * Rendering function that implements simple template inheritance.
 *
 * UView renders plain PHP templates with support for basic template inheritance
 * "à la Twig". 
 *
 * @param string $_template Name of the template to render without the extention.
 * @param array  $_data     Optional. Data to feed to the template.
 * @param string $_dir      Optional. Root directory for the templates. Default: templates/.
 *
 * @return string Rendered text.
 */
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

	//If a parent exists, uview is called recursively
	return isset($parent) ? uview($parent, $_data, $_dir) : $_content;
}
