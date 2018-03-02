<?php

switch ($_GET['order']) {
case 'taming':
	$order = 'taming';
	break;
case 'mining':
	$order = 'mining';
	break;
case 'woodcutting':
	$order = 'woodcutting';
	break;
case 'repair':
	$order = 'repair';
	break;
case 'herbalism':
	$order = 'herbalism';
	break;
case 'excavation':
	$order = 'excavation';
	break;
case 'archery':
	$order = 'archery';
	break;
case 'swords':
	$order = 'swords';
	break;
case 'axes':
	$order = 'axes';
	break;
case 'acrobatics':
	$order = 'acrobatics';
	break;
case 'fishing':
	$order = 'fishing';
	break;
case 'alchemy':
	$order = 'alchemy';
	break;
case 'unarmed':
	$order = 'unarmed';
	break;
default:
	$order = 'taming';
}

$query = mysqli_query($con, "SELECT mcmmo_users.user, 
       mcmmo_skills.taming, 
       mcmmo_skills.mining, 
       mcmmo_skills.woodcutting, 
       mcmmo_skills.repair, 
       mcmmo_skills.unarmed, 
       mcmmo_skills.alchemy, 
       mcmmo_skills.herbalism, 
       mcmmo_skills.excavation, 
       mcmmo_skills.archery, 
       mcmmo_skills.swords, 
       mcmmo_skills.axes, 
       mcmmo_skills.acrobatics, 
       mcmmo_skills.fishing
FROM   mcmmo_users 
       INNER JOIN mcmmo_skills 
               ON mcmmo_users.id = mcmmo_skills.user_id 
ORDER BY mcmmo_skills.$order DESC LIMIT $show_result");
$page_nums = mysqli_num_rows($query);

if ($page_nums >= 1) {
	echo "<table class=\"ui celled striped table\">";
	echo "<tr>";
    if($show_head == 'true') { echo "<td></td>"; }
	echo "<td><b>" . $_name['player'] . "</b></td>";
	echo "<td><a href='?table&order=taming'><b>" . $_name['taming'] . "</b></a></td>";
	echo "<td><a href='?table&order=mining'><b>" . $_name['mining'] . "</b></a></td>";
	echo "<td><a href='?table&order=woodcutting'><b>" . $_name['woodcutting'] . "</b></a></td>";
	echo "<td><a href='?table&order=repair'><b>" . $_name['repair'] . "</b></a></td>";
	echo "<td><a href='?table&order=unarmed'><b>" . $_name['unarmed'] . "</b></a></td>";
	echo "<td><a href='?table&order=herbalism'><b>" . $_name['herbalism'] . "</b></a></td>";
	echo "<td><a href='?table&order=excavation'><b>" . $_name['excavation'] . "</b></a></td>";
	echo "<td><a href='?table&order=archery'><b>" . $_name['archery'] . "</b></a></td>";
	echo "<td><a href='?table&order=swords'><b>" . $_name['swords'] . "</b></a></td>";
	echo "<td><a href='?table&order=axes'><b>" . $_name['axes'] . "</b></a></td>";
	echo "<td><a href='?table&order=acrobatics'><b>" . $_name['acrobatics'] . "</b></a></td>";
	echo "<td><a href='?table&order=fishing'><b>" . $_name['fishing'] . "</b></a></td>";
	echo "<td><a href='?table&order=alchemy'><b>" . $_name['alchemy'] . "</b></a></td>";
	echo "</tr>";
	while ($obj = mysqli_fetch_object($query)) {
		echo "<tr>";
		echo "";
        
		if($show_head == 'true') {
            echo "<td><center><img src='http://cravatar.eu/head/". $obj->user ."/128.png' width='25' height='25' ></center></td>";
		}       
        
		echo "<td><a href='?player&player=" . $obj->user . "'>" . $obj->user . "</a> </td>";
		echo "<td>" . $obj->taming . " </td>";
		echo "<td>" . $obj->mining . " </td>";
		echo "<td>" . $obj->woodcutting . " </td>";
		echo "<td>" . $obj->repair . " </td>";
		echo "<td>" . $obj->unarmed . " </td>";
		echo "<td>" . $obj->herbalism . " </td>";
		echo "<td>" . $obj->excavation . " </td>";
		echo "<td>" . $obj->excavation . " </td>";
		echo "<td>" . $obj->archery . " </td>";
		echo "<td>" . $obj->swords . " </td>";
		echo "<td>" . $obj->axes . " </td>";
		echo "<td>" . $obj->fishing . " </td>";
		echo "<td>" . $obj->alchemy . " </td>";
		echo "</tr>";
	}
}

echo "</table>";
?>