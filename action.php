<?php
$act = $_GET['act'];

switch ($act) {
	case "check":
		echo "check";
		break;
	case "export":
		echo "exoprt";
		break;
	default:
		echo "default";
}
?>