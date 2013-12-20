<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"         => "El <strong>:attribute</strong> debe ser aceptado.",
	"active_url"       => "<strong>:attribute</strong> es una URL inválida.",
	"after"            => "<strong>:attribute</strong> debe ser una fecha después de :date.",
	"alpha"            => "El <strong>:attribute</strong> solo puede contener letras.",
	"alpha_dash"       => "El <strong>:attribute</strong> solo puede contener letras, números, y guiones.",
	"alpha_num"        => "El <strong>:attribute</strong> solo puede contener letras y números.",
	"array"            => "El <strong>:attribute</strong> debe ser un array.",
	"before"           => "EL <strong>:attribute</strong> debe ser una fecha antes de :date.",
	"between"          => array(
		"numeric" => "El <strong>:attribute</strong> debe estar entre <strong>:min</strong> y <strong>:max</strong>.",
		"file"    => "El <strong>:attribute</strong> debe pesar entre <strong>:min</strong> y <strong>:max</strong> kilobytes.",
		"string"  => "El <strong>:attribute</strong> debe tener entre <strong>:min</strong> y <strong>:max</strong> caracteres.",
		"array"   => "El <strong>:attribute</strong> debe tener entre <strong>:min</strong> y <strong>:max</strong> items.",
	),
	"confirmed"        => "La confirmación de <strong>:attribute</strong> no concuerda.",
	"date"             => "El <strong>:attribute</strong> no es una fecha válida.",
	"date_format"      => "El <strong>:attribute</strong> no concuerda con el formato :format.",
	"different"        => "El <strong>:attribute</strong> y <strong>:other</strong> deben ser diferentes.",
	"digits"           => "El <strong>:attribute</strong> debe de ser de :digits dígitos.",
	"digits_between"   => "El <strong>:attribute</strong> debe de ser entre los dígitos <strong>:min</strong> y <strong>:max</strong>.",
	"email"            => "El formato para <strong>:attribute</strong> es inválido.",
	"exists"           => "El <strong>:attribute</strong> seleccionado no existe.",
	"image"            => "El <strong>:attribute</strong> debe ser una imagen.",
	"in"               => "El <strong>:attribute</strong> seleccionado es inválido.",
	"integer"          => "El <strong>:attribute</strong> debe ser entero.",
	"ip"               => "EL <strong>:attribute</strong> debe ser una dirección IP válida.",
	"max"              => array(
		"numeric" => "El <strong>:attribute</strong> no puede ser mayor a <strong>:max</strong>.",
		"file"    => "El peso para <strong>:attribute</strong> no puede ser mayor a <strong>:max</strong> kilobytes.",
		"string"  => "El <strong>:attribute</strong> no puede ser mayor a <strong>:max</strong> caracteres.",
		"array"   => "El <strong>:attribute</strong> no puede ser mayor a <strong>:max</strong> items.",
	),
	"mimes"            => "El <strong>:attribute</strong> debe ser un archivo de tipo: :<strong>:values</strong>.",
	"min"              => array(
		"numeric" => "El <strong>:attribute</strong> debe ser al menos <strong>:min</strong>.",
		"file"    => "El peso para <strong>:attribute</strong> debe ser de al menos <strong>:min</strong> kilobytes.",
		"string"  => "El <strong>:attribute</strong> debe tener al menos <strong>:min</strong> caracteres.",
		"array"   => "El <strong>:attribute</strong> debe tener al menos <strong>:min</strong> items.",
	),
	"not_in"           => "The selected <strong>:attribute</strong> is invalid.",
	"numeric"          => "El <strong>:attribute</strong> debe ser un número.",
	"regex"            => "El formato para <strong>:attribute</strong> es inválido.",
	"required"         => "El campo <strong>:attribute</strong> es requerido.",
	"required_if"      => "El campo <strong>:attribute</strong> es requerido cuando <strong>:other</strong> es :value.",
	"required_with"    => "El campo <strong>:attribute</strong> es requerido cuando :<strong>:values</strong> está presente.",
	"required_without" => "El campo <strong>:attribute</strong> es requerido cuando :<strong>:values</strong> no está presente.",
	"same"             => "<strong>:attribute</strong> y <strong>:other</strong> deben ser iguales.",
	"size"             => array(
		"numeric" => "<strong>:attribute</strong> debe ser <strong>:size</strong>.",
		"file"    => "<strong>:attribute</strong> debe tener <strong>:size</strong> kilobytes.",
		"string"  => "<strong>:attribute</strong> debe ser de <strong>:size</strong> caracteres.",
		"array"   => "<strong>:attribute</strong> debe contener <strong>:size</strong> items.",
	),
	"unique"           => "<strong>:attribute</strong> ya está en uso.",
	"url"              => "El formato para <strong>:attribute</strong> es inválido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
