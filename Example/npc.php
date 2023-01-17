<?php require_once 'engine/init.php'; include 'layout/overall/header.php';?>
<?php
$files = array("a_ghostly_woman","a_lost_soul","a_majestic_warwolf","a_prisoner","a_strange_fellow","a_sweaty_cyclops","a_tainted_soul","a_tortured_soul","a_wrinkled_beholder","abran_ironeye","admiral_wyrmslicer","adrenius","ahmet","ajax","al_dee","albert","aldo","alesar","alexander","alia","allen","alwin","amanda","amber","an_apparition","an_old_dragonlord","anderson","anerui","aneus","angelina","angus","ariella","arito","arkhothep","arnold","aruda","ashtamor","asima","asrak","atrad","avar_tar","azil","baaleal","bambi_bonecrusher","barbara","barney","bashira","basilisk","baxter","beatrice","benjamin","berenice","bertram","bezil","billy","blind_orc","blossom_bonecrusher","bonifacius","boozer","boques","borkas","bozo","braden","bradford","brasith","brengus","brewster","briasol","brodrosch","bron","bruno","budrik","bunny_bonecrusher","busty_bonecrusher","cameron","captain_bluebear","captain_fearless","captain_greyhound","captain_jack","captain_max","captain_max_1","captain_seagull","captain_seahorse","captain_sinbeard","captain_waverider","captain_waverider_1","carina","carlson","cedrik","ceiron","chantalle","charles","charlotta","chatterbone","chemar","chephan","chester_kahs","chondur","christoph","chrystal","cipfried","clark","clyde","cobra","cornelia","costello","dabui","dagomir","dalbrect","dallheim","dane","daniel_steelsoul","danlon","dario","demon_skeleton","demonguard","dermot","digger","dixi","djema","donald_mcronald","doug","dove","duncan","duria","dustrunner","ebenizer","edala","eddy","edoch","edowir","edvard","elane","elathriel","eleonore","elf_guard","elvith","emperor_kruzak","eranth","erayo","eremo","eroth","etzel","eva","evan","fahradin","falk","faluae","feizuhl","fenbala","fenech","fergus","ferks","fiona","frans","frederik","frodo","gabel","gail","galuna","gamel","gamon","gelagos","gordon","gorn","graubart","gregor","grizzly_adams","grizzly_adams_1","grizzly_adams_2","grizzly_adams_3","grizzly_adams_4","grizzly_adams_5","grizzly_adams_6","grizzly_adams_7","grizzly_adams_8","grizzly_adams_9","grof,_the_guard","gundralph","gurbasch","hl","habdel","hagor","hairycles","halif","hamilton","hanna","hardek","harkath_bloodblade","haroun","harsky","helor","herbert","hofech","hoggle","hugo","humgolf","humphrey","hyacinth","imalas","imbul","irea","irmana","irvin","ishebad","ishina","isimov","isolde","iwan","iwar","jack_fate","jack_fate_1","jakahr","james","jason","jean_claude","jefrey","jezzara","jimbin","john","julian","kalvin","karl","kasmir","kawill","kazzan","kevin","king_tibianus","klaus","kroox","kulag,_the_guard","lea","lector","leedelle","leeland","legola","liane","lightfoot","lily","livielle","lokur","lorbas","lorek","loria","loui","lubo","lugri","luna","lungelen","lynda","lyonel","maealil","malor","malunga","marcus","maria","marina","markwin","marlene","marvik","maryza","mehkesh","melchior","memech","meraya","mirabell","miraia","morgan","mortimer","morun","mugluf","muriel","muzir","myra","nahbob","nelliem","nemal","nezil","nielson","noodles","norbert","norf","norma","norris","nydala","obi","ocelus","odemara","old_adall","oldrak","olrik","omur","ormuhn","oswald","padreia","paolo","parlan","partos","peggy","pemaret","penny","perac","percy_silverhand","perod","petros","phillip","pino","puffels","pydar","queen_eloise","quentin","quero","rachel","rahkem","rashid","ratamari","ray","raymond_striker","razan","red_lilly","riddler","robin","roderick","rodney","rokyn","romella","rose","ross","rowenna","rudolph","sam","samir","sandra","santa_claus","sarina","scott","sebastian","sebastian_1","seymour","shalmar","shanar","shauna","sherry_mcronald","shiantis","shiriel","shirith","sigurd","simon_the_beggar","skjaar","smiley","snake_eye","stutch","suzy","svenson","sylvester","talesia","talphion","tandros","tesha","tezila","thanita","the_blind_prophet","the_crone","the_gatekeeper","the_oracle","the_orc_king","the_queen_of_the_banshee","theodore_loveless","thomas","tibra","tim,_the_guard","timur","todd","tokel","tom","topsy","torence","tothdral","trimegis","trisha","tristan","tulf","turvy","tyrias","ubaid","ukea","ulrik","umar","urkalio","ursula","uso","ustan","uzgod","uzon","velvet","vera","vescu","vladruc","vulturenose","wally","walter,_the_guard","warbert","willard","william","willie","wyat","wyda","xed","xodet","yaman","yanni","yberius","yoem","yulas","zaidal","zebron","zerbrus","zoltan");
if (in_array($_GET['name'], $files)) {
	include 'library/npcs/' . $_GET['name'] . '.php';
}
else {
	echo 'not found';
}
	
?>
<?php include 'layout/overall/footer.php'; ?>