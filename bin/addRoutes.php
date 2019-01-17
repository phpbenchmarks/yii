#!/usr/bin/env php
<?php

function asPhpArray($array, $prefix="",$depth=1,$format=false) {
	$exts=array ();
	$extsStr="";$tab="";$nl="";
	if($format){
		$tab=str_repeat("\t",$depth);
		$nl=PHP_EOL;
	}
	foreach ( $array as $k => $v ) {
		$exts[]="\"" . $k . "\"=>\"" . $v . "\"";
	}
	if (\sizeof($exts) > 0 || $prefix !== "") {
		$extsStr="(" . \implode(",".$nl.$tab, $exts).")";
		if(\sizeof($exts)>0){
			$extsStr="(" .$nl.$tab. \implode(",".$nl.$tab, $exts).$nl.$tab.")";
		}
	}
	return $prefix . $extsStr;
}

echo "\n********************************************\n";
echo "initializes cache for 500 routes \n";
echo "********************************************\n";

$routes=['benchmark/rest'=>'restapi/index'];
for ($i = 0; $i < 500; $i++) {
	$routes['/benchmark/test-route-'.$i]='restapi/index';
}

file_put_contents("config/routes.php", '<?php return '.asPhpArray($routes,'array').";\n");
echo "\n501 routes generated\n";

