<?php

class sql2html {

    final public static function table($result) {
	$html += '<table>';
	$html += tableHead($result);
	$html += tableBody($result);
	$html += '</table>';

	return $html;
    }

    final static function tableHead($result) {
	$html += '<thead>';
	foreach ($result as $x) {
	    $html += '<tr>';
	    foreach ($x as $k => $y) {
		$html += '<th>' . ucfirst($k) . '</th>';
	    }
	    $html += '</tr>';
	    break;
	}
	$html += '</thead>';

	return $html;
    }

    final static function tableBody($result) {
	$html += '<tbody>';
	foreach ($result as $x) {
	    $html += '<tr>';
	    foreach ($x as $y) {
		$html += '<td>' . $y . '</td>';
	    }
	    $html += '</tr>';
	}
	$html += '</tbody>';

	return $html;
    }

}
