<?php /**/ ?><?php
echo "Too scared? Try out the <a href=\"AP.php\">AP</a> and <a href=\"AD.php\">AD</a> versions<br>";
echo "Also try out the <a href=\"5man.php\">5 man team randomizer</a> (great for inhouses)<br><br>";

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

$roles = array(0 => "Jungler", "Mid", "Roamer", "Top", "Bottom", "Try-Hard", "Mundo (DO WHAT YOU PLEASE)");

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
false)
);

$role_roll = rand(0, 6);
$boots_roll = rand(0, 6);

$item1_roll = rand(0, 50);
$items_array["chosen"][$item1_roll] = true;

$item2_roll = rand(0, 50);
while($items_array["chosen"][$item2_roll] == true and $items_array["stackable"][$item2_roll] == false){
	echo "Picked two ";
	echo $items_array["items"][$item2_roll];
	echo ", rerolling <br>";
	$item2_roll = rand(0, 50);
}
$items_array["chosen"][$item2_roll] = true;

$item3_roll = rand(0, 50);
while($items_array["chosen"][$item3_roll] == true and $items_array["stackable"][$item3_roll] == false){
	echo "Picked two ";
	echo $items_array["items"][$item3_roll];
	echo ", rerolling <br>";
	$item3_roll = rand(0, 50);
}
$items_array["chosen"][$item3_roll] = true;

$item4_roll = rand(0, 50);
while($items_array["chosen"][$item4_roll] == true and $items_array["stackable"][$item4_roll] == false){
	echo "Picked two ";
	echo $items_array["items"][$item4_roll];
	echo ", rerolling <br>";
	$item4_roll = rand(0, 50);
}
$items_array["chosen"][$item4_roll] = true;

$item5_roll = rand(0, 50);
while($items_array["chosen"][$item5_roll] == true and $items_array["stackable"][$item5_roll] == false){
	echo "Picked two ";
	echo $items_array["items"][$item5_roll];
	echo ", rerolling <br>";
	$item5_roll = rand(0, 50);
}
$items_array["chosen"][$item5_roll] = true;

$skill1_roll = rand(0, 11);
$skill2_roll = rand(0, 11);

while ($skill1_roll == $skill2_roll)
{
   $skill1_roll = rand(0, 11);
   $skill2_roll = rand(0, 11);
}

echo "Your role is... ";
echo '<strong>', $roles[$role_roll], '</strong>';
echo "<br />\n";

if($role_roll == 0) {
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

echo 'Original concept and code by <a href="mailto:mononokel@cox.net">Mononokel</a><br>';
echo 'Updates and hosting by <a href="mailto:email@suspi.net">Suspi</a><br>';
echo '<a href="changelog.txt">Changelog</a>';
?>
