<?php /**/ ?><head>
<script language="JavaScript">
var ids=new Array('a1','a2','a1','b1','b2','b1','c1','c2','c1','d1','d2','d1','e1','e2','e1');

function search (id) {
  for(var i=0; i<ids.length; i++) {
    if (ids[i] == id) return i;
  }
}

function switchid(id){
	hidediv(ids[search(id) + 1]);
	showdiv(id);
}

function hidediv(id) {
	//safe function to hide an element with a specified id
	if (document.getElementById) { // DOM3 = IE5, NS6
		document.getElementById(id).style.display = 'none';
	}
	else {
		if (document.layers) { // Netscape 4
			document.id.display = 'none';
		}
		else { // IE 4
			document.all.id.style.display = 'none';
		}
	}
}

function showdiv(id) {
	//safe function to show an element with a specified id
		  
	if (document.getElementById) { // DOM3 = IE5, NS6
		document.getElementById(id).style.display = 'block';
	}
	else {
		if (document.layers) { // Netscape 4
			document.id.display = 'block';
		}
		else { // IE 4
			document.all.id.style.display = 'block';
		}
	}
}
</script>
</head>


<?php

echo '<a href="index.php"><= Back</a><br><br>';
if($_GET["seed"] != 0){
	$seed = $_GET["seed"];
}
else
{
	list($usec, $sec) = explode(' ', microtime());
	$seed = (float) $sec + ((float) $usec * 100000);
}

srand($seed);

echo '<a href="5man.php?seed=', $seed ,'">Link to this build</a><br><br>';
$spell_array = array("spells" => array(0 =>
"Exhaust",
"Ghost",
"Heal",
"Revive",
"Teleport",
"Cleanse",
"Fortify",
"Clarity",
"Ignite",
"Rally",
"Clairvoyance",
"Flash"),
"images" => array(0 =>
"Exhaust.png",
"Ghost.png",
"Heal.png",
"Revive.png",
"Teleport.png",
"Cleanse.png",
"Fortify.png",
"Clarity.png",
"Ignite.png",
"Rally.png",
"Clairvoyance.png",
"Flash.png"));

$roles = array(0 => "Jungler", "Roamer", "Top", "Bottom", "Mid", "Try-Hard", "Mundo (DO AS YOU PLEASE)");

$boots_array = array("boots" => array(0 =>
"Berserker's Greaves",
"Boots of Mobility",
"Boots of Swiftness",
"Ionian Boots of Lucidity",
"Mercury's Treads",
"Ninja Tabi",
"Sorcerer's Shoes"),
"images" => array(0 =>
"Berserker's_Greaves.gif",
"Boots_of_Mobility.gif",
"Boots_of_Swiftness.gif",
"Ionian_Boots_of_Lucidity.gif",
"Mercury's_Treads.gif",
"Ninja_Tabi.gif",
"Sorcerer's_Shoes.gif"));

$items_array = array("items" => array(0 =>
"Archangel's Staff",
"Banshee's Veil",
"Deathfire Grasp",
"Frozen Heart",
"Frozen Mallet",
"Hextech Gunblade",
"Lich Bane",
"Madred's Bloodrazor",
"Manamune",
"Morello's Evil Tome",
"Nashor's Tooth",
"Phantom Dancer",
"Randuin's Omen",
"Rod of Ages",
"Shurelya's Reverie",
"Soul Shroud",
"Stark's Fervor",
"Trinity Force",
"Will of the Ancients",
"Wriggle's Lantern",
"Youmuu's Ghostblade",
"Abyssal Scepter",
"Aegis of the Legion",
"Atma's Impaler",
"Chalice of Harmony",
"Executioner's Calling",
"Force of Nature",
"Guardian Angel",
"Guinsoo's Rageblade",
"Haunting Guise",
"Hexdrinker",
"Infinity Edge",
"Last Whisper",
"Leviathan",
"Malady",
"Mejai's Soulstealer",
"Quicksilver Sash",
"Rabadon's Deathcap",
"Rylai's Crystal Scepter",
"Spirit Visage",
"Sunfire Cape",
"Sword of the Divine",
"Sword of the Occult",
"The Black Cleaver",
"The Bloodthirster",
"Thornmail",
"Tiamat",
"Void Staff",
"Warmog's Armor",
"Wit's End",
"Zhonya's Hourglass"),

"images" => array(0 =>
"Archangel's_Staff.gif",
"Banshee's_Veil.gif",
"Deathfire_Grasp.gif",
"Frozen_Heart.gif",
"Frozen_Mallet.gif",
"Hextech_Gunblade.gif",
"Lich_Bane.gif",
"Madred's_Bloodrazor.gif",
"Manamune.gif",
"Morello's_Evil_Tome.png",
"Nashor's_Tooth.gif",
"Phantom_Dancer.gif",
"Randuin's_Omen.gif",
"Rod_of_Ages.gif",
"Shurelya's_Reverie.gif",
"Soul_Shroud.gif",
"Stark's_Fervor.gif",
"Trinity_Force.gif",
"Will_of_the_Ancients.gif",
"Wriggle's_Lantern.png",
"Youmuu's_Ghostblade.gif",
"Abyssal_Scepter.gif",
"Aegis_of_the_Legion.gif",
"Atma's_Impaler.gif",
"Chalice_of_Harmony.gif",
"Executioner's_Calling.gif",
"Force_of_Nature.gif",
"Guardian_Angel.gif",
"Guinsoo's_Rageblade.png",
"Haunting_Guise.gif",
"Hexdrinker.gif",
"Infinity_Edge.gif",
"Last_Whisper.gif",
"Leviathan.gif",
"Malady.gif",
"Mejai's_Soulstealer.gif",
"Quicksilver_Sash.gif",
"Rabadon's_Deathcap.gif",
"Rylai's_Crystal_Scepter.gif",
"Spirit_Visage.gif",
"Sunfire_Cape.gif",
"Sword_of_the_Divine.gif",
"Sword_of_the_Occult.gif",
"The_Black_Cleaver.gif",
"The_Bloodthirster.gif",
"Thornmail.gif",
"Tiamat.gif",
"Void_Staff.gif",
"Warmog's_Armor.gif",
"Wit's_End.gif",
"Zhonya's_Hourglass.gif"),

"stackable" => array(0 =>
true,
false,
false,
false,
false,
true,
false,
false,
false,
false,
false,
true,
false,
true,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
true,
false,
true,
false,
true,
false,
false),

"role" => array(0 =>
"AP",
"Both",
"AP",
"Both",
"AD",
"Both",
"AP",
"AD",
"AD",
"AP",
"Both",
"AD",
"Both",
"AP",
"Both",
"Both",
"AD",
"Both",
"AP",
"AD",
"AD",
"AP",
"Both",
"AD",
"Both",
"AD",
"Both",
"Both",
"Both",
"AP",
"AD",
"AD",
"AD",
"Both",
"Both",
"AP",
"Both",
"AP",
"AP",
"AP",
"Both",
"AD",
"AD",
"AD",
"AD",
"Both",
"AD",
"AP",
"Both",
"AD",
"AP"),

"chosen" => array(0 =>
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false),

"team" => array(0 =>
false,
false,
false,
true,
true,
false,
false,
false,
false,
false,
false,
false,
true,
false,
true,
true,
true,
false,
true,
false,
false,
true,
true,
false,
false,
true,
false,
false,
false,
false,
false,
false,
false,
false,
true,
false,
false,
false,
true,
false,
false,
false,
false,
true,
false,
false,
false,
false,
false,
false,
false),

"manaless" => array(0 =>
true,
false,
false,
true,
false,
false,
false,
false,
true,
true,
false,
false,
false,
true,
true,
false,
false,
false,
false,
false,
false,
false,
false,
false,
true,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false,
false)
);

$jokebuilds = array(0 => 
array("name" => "ROCKETSHIP",  "skill1" => 3, "skill2" => 1,  "boots" => 1, "item2" => 11, "item3" => 11, "item4" => 11, "item5" => 11, "item6" => 11),
array("name" => "PEW PEW PEW",    "skill1" => 8, "skill2" => 0,  "boots" => 6, "item2" => 0,  "item3" => 0,  "item4" => 0,  "item5" => 0,  "item6" => 37),
array("name" => "SMASHY THINGS",    "skill1" => 8, "skill2" => 0,  "boots" => 0, "item2" => 31, "item3" => 44, "item4" => 44, "item5" => 44, "item6" => 44),
array("name" => "BRAWNDO",    "skill1" => 4, "skill2" => 6,  "boots" => 5, "item2" => 23, "item3" => 48, "item4" => 48, "item5" => 48, "item6" => 48),
array("name" => "BRAVERY!",    "skill1" => 3, "skill2" => 9,  "boots" => 2, "item2" => 35, "item3" => 42, "item4" => 33, "item5" => 17, "item6" => 46),
array("name" => "MAGIKARP","skill1" => 0, "skill2" => 1,  "boots" => 0, "item2" => 46, "item3" => 46, "item4" => 46, "item5" => 46, "item6" => 46)
);

$role4_roll = rand(0, 6);
$role5_roll = rand(0, 6);

while($role4_roll == $role5_roll)
{
	$role4_roll = rand(0, 5);
	$role5_roll = rand(0, 5);
}

$teamtroll_roll = rand(0, 100);

switch($teamtroll_roll) {
	case 0:
		echo '<strong>SUNFIRE TEAM!!!</strong><br>';
		break;
	case 1:
		echo '<strong>ZOOM ZOOM TEAM!!!</strong><br>';
		break;
	default:
		break;
}

echo "<table><tr>";

$hiddenids = array(0 => 'a1','a2','b1','b2','c1','c2','d1','d2','e1','e2');

$players = array(1 => 1, 2, 3, 4, 5);

$random_player = rand(1,5);
$temp = $players[1];
$players[1] = $players[$random_player];
$players[$random_player] = $temp;

$random_player = rand(1,5);
$temp = $players[2];
$players[2] = $players[$random_player];
$players[$random_player] = $temp;

$random_player = rand(1,5);
$temp = $players[3];
$players[3] = $players[$random_player];
$players[$random_player] = $temp;

$random_player = rand(1,5);
$temp = $players[4];
$players[4] = $players[$random_player];
$players[$random_player] = $temp;

$random_player = rand(1,5);
$temp = $players[5];
$players[5] = $players[$random_player];
$players[$random_player] = $temp;

for($i = 1; $i <= 5; $i++)
{
	echo "<td>";
	$joke_roll = rand(0, 100);

	echo 'Player ', $players[$i], '<br>';

	if($joke_roll == 0)
	{
		$jokebuild_roll = rand(0, 5);
		echo "Your role is... <strong>", $jokebuilds[$jokebuild_roll]["name"];
		echo '</strong><br /><img src="'. $spell_array[images][$jokebuilds[$jokebuild_roll]["skill1"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $spell_array[spells][$jokebuilds[$jokebuild_roll]["skill1"]];
		echo "<br><br>";
	
		echo '<img src="'. $spell_array[images][$jokebuilds[$jokebuild_roll]["skill2"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $spell_array[spells][$jokebuilds[$jokebuild_roll]["skill2"]];
		echo "<br><br>";
	
		echo '<img src="'. $boots_array[images][$jokebuilds[$jokebuild_roll]["boots"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $boots_array[boots][$jokebuilds[$jokebuild_roll]["boots"]] . '<br_/><br />';;
	
		echo '<img src="'. $items_array[images][$jokebuilds[$jokebuild_roll]["item2"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $items_array[items][$jokebuilds[$jokebuild_roll]["item2"]] . "<br_/><br />";
	
		echo '<img src="'. $items_array[images][$jokebuilds[$jokebuild_roll]["item3"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $items_array[items][$jokebuilds[$jokebuild_roll]["item3"]] . "<br_/><br />";
		
		echo '<img src="'. $items_array[images][$jokebuilds[$jokebuild_roll]["item4"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $items_array[items][$jokebuilds[$jokebuild_roll]["item4"]] . "<br_/><br />";
		
		echo '<img src="'. $items_array[images][$jokebuilds[$jokebuild_roll]["item5"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $items_array[items][$jokebuilds[$jokebuild_roll]["item5"]] . "<br_/><br />";
		
		echo '<img src="'. $items_array[images][$jokebuilds[$jokebuild_roll]["item6"]].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $items_array[items][$jokebuilds[$jokebuild_roll]["item6"]] . "<br_/><br /><br>";

	}
	else {

	echo '<div id="',$hiddenids[($i-1)*2],'" style="display:block;">';

	switch($teamtroll_roll) {
		case 1:
			$boots_roll = 1;
			break;
		default:
			$boots_roll = rand(0, 6);
			break;
	}

	switch($teamtroll_roll) {
		case 0:
			$item1_roll = 40;
			$items_array["chosen"][$item1_roll] = true;
			break;
		case 1:
			$item1_roll = 14;
			$items_array["chosen"][$item1_roll] = true;
			break;
		default:
			$item1_roll = rand(0, 50);
			while($items_array["chosen"][$item1_roll] == true){
				$item1_roll = rand(0, 50);
			}
			$items_array["chosen"][$item1_roll] = true;
			break;
	}

	$item2_roll = rand(0, 50);
	while(($items_array["chosen"][$item2_roll] == true and $items_array["stackable"][$item2_roll] == false) or ($items_array["chosen"][$item2_roll] == true and $items_array["team"][$item2_roll] == true)){
		$item2_roll = rand(0, 50);
	}
	$items_array["chosen"][$item2_roll] = true;

	$item3_roll = rand(0, 50);
	while(($items_array["chosen"][$item3_roll] == true and $items_array["stackable"][$item3_roll] == false) or ($items_array["chosen"][$item3_roll] == true and $items_array["team"][$item3_roll] == true)){
		$item3_roll = rand(0, 50);
	}
	$items_array["chosen"][$item3_roll] = true;

	$item4_roll = rand(0, 50);
	while(($items_array["chosen"][$item4_roll] == true and $items_array["stackable"][$item4_roll] == false) or ($items_array["chosen"][$item4_roll] == true and $items_array["team"][$item4_roll] == true)){
		$item4_roll = rand(0, 50);
	}
	$items_array["chosen"][$item4_roll] = true;

	$item5_roll = rand(0, 50);
	while(($items_array["chosen"][$item5_roll] == true and $items_array["stackable"][$item5_roll] == false) or ($items_array["chosen"][$item5_roll] == true and $items_array["team"][$item5_roll] == true)){
		$item5_roll = rand(0, 50);
	}
	$items_array["chosen"][$item5_roll] = true;

	if($items_array["team"][$item1_roll] == false)
		$items_array["chosen"][$item1_roll] = false;
	if($items_array["team"][$item2_roll] == false)
		$items_array["chosen"][$item2_roll] = false;
	if($items_array["team"][$item3_roll] == false)
		$items_array["chosen"][$item3_roll] = false;
	if($items_array["team"][$item4_roll] == false)
		$items_array["chosen"][$item4_roll] = false;
	if($items_array["team"][$item5_roll] == false)
		$items_array["chosen"][$item5_roll] = false;

	switch($teamtroll_roll) {

		case 1:
			$skill1_roll = 4;
			$skill2_roll = 1;
			break;
		default:
			$skill1_roll = rand(0, 11);
			$skill2_roll = rand(0, 11);
			break;
	}

	while ($skill1_roll == $skill2_roll)
	{
	   $skill1_roll = rand(0, 11);
 	  $skill2_roll = rand(0, 11);
	}

	echo "Your role is... ";
	switch($i) {
		case 1:
			$role = "Mid";
			break;
		case 2:
			$role = "Top";
			break;
		case 3:
			$role = "Bottom";
			break;
		case 4:
			$role = $roles[$role4_roll];
			break;
		case 5:
			$role = $roles[$role5_roll];
			break;
	}

	echo '<strong>', $role, '</strong>';
	echo "<br />\n";

	echo '<a href="javascript:switchid(\'', $hiddenids[($i-1)*2+1] , '\');">reroll mana-less</a><br>';

	if($role == "Jungler") {
		echo '<img src="Smite.png">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "Smite<br_/><br />";
	}
	else {
		echo '<img src="'. $spell_array[images][$skill1_roll].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $spell_array[spells][$skill1_roll];
		echo "<br><br>";
	}
	
	echo '<img src="'. $spell_array[images][$skill2_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $spell_array[spells][$skill2_roll];
	echo "<br><br>";
	
	echo '<img src="'. $boots_array[images][$boots_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $boots_array[boots][$boots_roll] . '<br_/><br />';;
	
	echo '<img src="'. $items_array[images][$item1_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item1_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item2_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item2_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item3_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item3_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item4_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item4_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item5_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item5_roll] . "<br_/><br /><br>";


	echo '</div>';









	echo '<div id="',$hiddenids[($i-1)*2+1],'" style="display:none;">';

	switch($teamtroll_roll) {
		case 1:
			$boots_roll = 1;
			break;
		default:
			$boots_roll = rand(0, 6);
			break;
	}

	switch($teamtroll_roll) {
		case 0:
			$item1_roll = 40;
			$items_array["chosen"][$item1_roll] = true;
			break;
		case 1:
			$item1_roll = 14;
			$items_array["chosen"][$item1_roll] = true;
			break;
		default:
			$item1_roll = rand(0, 50);
			while($items_array["manaless"][$item2_roll] == true or $items_array["chosen"][$item1_roll] == true){
				$item1_roll = rand(0, 50);
			}
			$items_array["chosen"][$item1_roll] = true;
			break;
	}

	$item2_roll = rand(0, 50);
	while($items_array["manaless"][$item2_roll] == true or ($items_array["chosen"][$item2_roll] == true and $items_array["stackable"][$item2_roll] == false) or ($items_array["chosen"][$item2_roll] == true and $items_array["team"][$item2_roll] == true)){
		$item2_roll = rand(0, 50);
	}
	$items_array["chosen"][$item2_roll] = true;

	$item3_roll = rand(0, 50);
	while($items_array["manaless"][$item3_roll] == true or ($items_array["chosen"][$item3_roll] == true and $items_array["stackable"][$item3_roll] == false) or ($items_array["chosen"][$item3_roll] == true and $items_array["team"][$item3_roll] == true)){
		$item3_roll = rand(0, 50);
	}
	$items_array["chosen"][$item3_roll] = true;

	$item4_roll = rand(0, 50);
	while($items_array["manaless"][$item4_roll] == true or ($items_array["chosen"][$item4_roll] == true and $items_array["stackable"][$item4_roll] == false) or ($items_array["chosen"][$item4_roll] == true and $items_array["team"][$item4_roll] == true)){
		$item4_roll = rand(0, 50);
	}
	$items_array["chosen"][$item4_roll] = true;

	$item5_roll = rand(0, 50);
	while($items_array["manaless"][$item5_roll] == true or ($items_array["chosen"][$item5_roll] == true and $items_array["stackable"][$item5_roll] == false) or ($items_array["chosen"][$item5_roll] == true and $items_array["team"][$item5_roll] == true)){
		$item5_roll = rand(0, 50);
	}
	$items_array["chosen"][$item5_roll] = true;

	if($items_array["team"][$item1_roll] == false)
		$items_array["chosen"][$item1_roll] = false;
	if($items_array["team"][$item2_roll] == false)
		$items_array["chosen"][$item2_roll] = false;
	if($items_array["team"][$item3_roll] == false)
		$items_array["chosen"][$item3_roll] = false;
	if($items_array["team"][$item4_roll] == false)
		$items_array["chosen"][$item4_roll] = false;
	if($items_array["team"][$item5_roll] == false)
		$items_array["chosen"][$item5_roll] = false;

	switch($teamtroll_roll) {

		case 1:
			$skill1_roll = 4;
			$skill2_roll = 1;
			break;
		default:
			$skill1_roll = rand(0, 11);
			$skill2_roll = rand(0, 11);
			break;
	}

	while ($skill1_roll == $skill2_roll or $skill1_roll == 7 or $skill2_roll == 7)
	{
	   $skill1_roll = rand(0, 11);
 	  $skill2_roll = rand(0, 11);
	}

	echo "Your role is... ";
	switch($i) {
		case 1:
			$role = "Mid";
			break;
		case 2:
			$role = "Top";
			break;
		case 3:
			$role = "Bottom";
			break;
		case 4:
			$role = $roles[$role4_roll];
			break;
		case 5:
			$role = $roles[$role5_roll];
			break;
	}

	echo '<strong>', $role, '</strong>';
	echo "<br />\n";

	echo '<a href="javascript:switchid(\'', $hiddenids[($i-1)*2] , '\');">hide mana-less</a><br>';

	if($role == "Jungler") {
		echo '<img src="Smite.png">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "Smite<br_/><br />";
	}
	else {
		echo '<img src="'. $spell_array[images][$skill1_roll].'">';
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $spell_array[spells][$skill1_roll];
		echo "<br><br>";
	}
	
	echo '<img src="'. $spell_array[images][$skill2_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $spell_array[spells][$skill2_roll];
	echo "<br><br>";
	
	echo '<img src="'. $boots_array[images][$boots_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $boots_array[boots][$boots_roll] . '<br_/><br />';;
	
	echo '<img src="'. $items_array[images][$item1_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item1_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item2_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item2_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item3_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item3_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item4_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item4_roll] . "<br_/><br />";
	
	echo '<img src="'. $items_array[images][$item5_roll].'">';
	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $items_array[items][$item5_roll] . "<br_/><br /><br>";


	echo '</div>';

	}

	echo "</td>";
}
echo "</tr></table>";

echo 'Original concept and code by <a href="mailto:mononokel@cox.net">Mononokel</a><br>';
echo 'Updates and hosting by <a href="mailto:email@suspi.net">Suspi</a><br>';
echo '<a href="changelog.txt">Changelog</a>';
?>
