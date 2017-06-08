<?php

public function format_br_datetime($string)
{
	return date('d/m/Y H:i:s',strtotime($string) );
}
