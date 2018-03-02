<?php

if(isset($search)) {

    $search = mysqli_escape_string($con, $_GET['search']);
    $search_query = mysqli_query($con, "SELECT * FROM `mcmmo_users` WHERE `user` like '%$search%'");
    $search_nums = mysqli_num_rows($search_query);

    if ($search_nums < 1) {
        echo $_name['player_not_found'];
    }

    if ($search_nums > 1) {
        echo $_name['more_results'] . "<br /><br />";
        while ($obj = mysqli_fetch_object($search_query)) {
            echo "<a href='?player=" . $obj->user . "'> " . $obj->user . " </a><br />";
        }
    }
}

if ($search_nums == 1 OR isset($player)) {
	while ($obj = mysqli_fetch_object($search_query)) {
		$player = $obj->user;
	}

	$query = mysqli_query($con, "SELECT mcmmo_users.user, mcmmo_skills.taming, mcmmo_skills.mining, mcmmo_skills.woodcutting, mcmmo_skills.repair, mcmmo_skills.unarmed, mcmmo_skills.alchemy, mcmmo_skills.herbalism, mcmmo_skills.excavation, mcmmo_skills.archery, mcmmo_skills.swords, mcmmo_skills.axes, mcmmo_skills.acrobatics, mcmmo_skills.fishing FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id=mcmmo_skills.user_id WHERE mcmmo_users.user='$player' ");
	$num_url = mysqli_num_rows($query);
	while ($obj = mysqli_fetch_object($query)) {
		$taming = $obj->taming;
		$mining = $obj->mining;
		$woodcutting = $obj->woodcutting;
		$repair = $obj->repair;
		$unarmed = $obj->unarmed;
		$herbalism = $obj->herbalism;
		$excavation = $obj->excavation;
		$archery = $obj->archery;
		$swords = $obj->swords;
		$axes = $obj->axes;
		$acrobatics = $obj->acrobatics;
		$fishing = $obj->fishing;
		$alchemy = $obj->alchemy;
	}

	echo "<div class='ui grid'>";
	echo "<div class='two wide column'></div>";
	echo "<div class='four wide column'>";
	echo "<span><b>" . $_name['player'] . ": </b>" . $player . "</span>";
	echo "<img src='http://zombieland.eu/api/skin.php?u=$player&s=600'>";
	echo "</div>";
	echo "<div class='four wide column'>";
	echo "<h1>" . $_name['level'] . ":</h1>";
	echo "<table class=\"ui celled striped table\">";
	echo "<tr>";
	echo "  <td>" . $_name['taming'] . "</td>";
	echo "  <td>$taming</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['mining'] . "</td>";
	echo "  <td>$mining</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['woodcutting'] . "</td>";
	echo "  <td>$woodcutting</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['repair'] . "</td>";
	echo "  <td>$repair</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['unarmed'] . "</td>";
	echo "  <td>$unarmed</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['herbalism'] . "</td>";
	echo "  <td>$herbalism</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['excavation'] . "</td>";
	echo "  <td>$excavation</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['excavation'] . "</td>";
	echo "  <td>$excavation</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['archery'] . "</td>";
	echo "  <td>$archery</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['swords'] . "</td>";
	echo "  <td>$swords</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['axes'] . "</td>";
	echo "  <td>$axes</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['acrobatics'] . "</td>";
	echo "  <td>$acrobatics</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['fishing'] . "</td>";
	echo "  <td>$fishing</td>";
	echo "</tr>";
	echo "  <td>" . $_name['alchemy'] . "</td>";
	echo "  <td>$alchemy</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
	$query = mysqli_query($con, "SELECT mcmmo_users.user, mcmmo_experience.taming, mcmmo_experience.mining, mcmmo_experience.woodcutting, mcmmo_experience.repair, mcmmo_experience.unarmed, mcmmo_experience.alchemy, mcmmo_experience.herbalism, mcmmo_experience.excavation, mcmmo_experience.archery, mcmmo_experience.swords, mcmmo_experience.axes, mcmmo_experience.acrobatics, mcmmo_experience.fishing FROM mcmmo_users INNER JOIN mcmmo_experience ON mcmmo_users.id=mcmmo_experience.user_id WHERE mcmmo_users.user='$player' ");
	$num_url = mysqli_num_rows($query);
	while ($obj = mysqli_fetch_object($query)) {
		$taming1 = $obj->taming;
		$mining1 = $obj->mining;
		$woodcutting1 = $obj->woodcutting;
		$repair1 = $obj->repair;
		$unarmed1 = $obj->unarmed;
		$herbalism1 = $obj->herbalism;
		$excavation1 = $obj->excavation;
		$archery1 = $obj->archery;
		$swords1 = $obj->swords;
		$axes1 = $obj->axes;
		$acrobatics1 = $obj->acrobatics;
		$fishing1 = $obj->fishing;
		$alchemy1 = $obj->alchemy;
	}

	echo "<div class='four wide column'>";
	echo "<h1>" . $_name['experience'] . ":</h1>";
	echo "<table class=\"ui celled striped table\">";
	echo "<tr>";
	echo "  <td>" . $_name['taming'] . "</td>";
	echo "  <td>$taming1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['mining'] . "</td>";
	echo "  <td>$mining1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['woodcutting'] . "</td>";
	echo "  <td>$woodcutting1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['repair'] . "</td>";
	echo "  <td>$repair1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['unarmed'] . "</td>";
	echo "  <td>$unarmed1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['herbalism'] . "</td>";
	echo "  <td>$herbalism1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['excavation'] . "</td>";
	echo "  <td>$excavation1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['excavation'] . "</td>";
	echo "  <td>$excavation1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['archery'] . "</td>";
	echo "  <td>$archery1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['swords'] . "</td>";
	echo "  <td>$swords1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['axes'] . "</td>";
	echo "  <td>$axes1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['acrobatics'] . "</td>";
	echo "  <td>$acrobatics1</td>";
	echo "</tr>";
	echo "<tr>";
	echo "  <td>" . $_name['fishing'] . "</td>";
	echo "  <td>$fishing1</td>";
	echo "</tr>";
	echo "  <td>" . $_name['alchemy'] . "</td>";
	echo "  <td>$alchemy1</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
	echo "</div>";
}