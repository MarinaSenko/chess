<?php

function createChess ($horizontal, $vertical, $color ) {

	$output = '';

	$white_cell = '<td style="background-color: white">111</td>';
	$black_cell = '<td style="background-color: black">222</td>';
	$custom_cell = "<td style='background-color: {$color}'>333</td>";

	$output .= "<table style='border: 5px solid black'>";

	for ( $tr = 1; $tr <= $horizontal; $tr ++ ) {
		$output .= "<tr>";
		for ( $td = 1; $td <= $vertical; $td ++ ) {
			static $count = 0;
			$count ++;

			if ( $tr % 3 == 0 ) {

				if ( $count % 3 == 0 ) {
					$output .= $black_cell;
				} else if ( $count % 3 == 1 ) {
					$output .= $white_cell;
				} else {
					$output .= $custom_cell;
				}

			} else if ( $tr % 3 == 1 ) {

				if ( $count % 3 == 0 ) {
					$output .= $custom_cell;
				} else if ( $count % 3 == 1 ) {
					$output .= $black_cell;
				} else {
					$output .= $white_cell;
				}

			} else {
				if ( $count % 3 == 0 ) {
					$output .= $white_cell;
				} else if ( $count % 3 == 1 ) {
					$output .= $custom_cell;
				} else {
					$output .= $black_cell;
				}
			}
		}
		$output .= "</tr>";
	}
	$output .= "</table>";
	return $output;
}