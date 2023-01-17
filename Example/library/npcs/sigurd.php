<style>
.npc-greetings {
    font: bold 11px/14px Tahoma,sans-serif;
    padding-top: 20px;
}

.npc-sounds {
	color: #d14703;
    font-weight: bold;
	float: left;
}

.npc-sounds li:empty {
	display: none;
}

.table.tbl-hover tr td:nth-child(1) {
	width:20%
}

.table.tbl-hover tr td:nth-child(2) {
	width:50%
}

.table.tbl-hover tr td:nth-child(3) {
	width:30%
}

.container {
	position: relative
}

.imageT {
    height: 66px;
    width: 66px;
    background-position: center;
    background-repeat: no-repeat;
    display: block;
}
.borderGuide {
	float: left;
    margin-right: 20px;
    margin-bottom: 20px;
    height: 66px;
    width: 66px;
}

.clear {
    clear: both;
    float: initial!important;
}

.npc-profile {
	margin-top: -10px;
}
</style>
<h2>Sigurd</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=69&b=0&c=0&d=0&e=0&f=0&h=3');"></div>
	</div>
	<div class="npc-greetings">"Welcome to the magic store, PLAYERNAME!"</div>
</div>
<div class="clear"></div>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
<a href="#" onclick="toggle_visibility('foo');">Show position in map</a>
<div id="foo" style="display: none;">
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32626,31923,6,3&e=;31923,32626,6,9&no_buttons=1"></iframe>
	<b>The map is not the original Tibianus map. Credits for the map for Tibia fansite: TibiaRoyal.com</b>
</div>
<h2>Trades</h2>
<div style="float: left; width: 50%">
	<span><b>Sell Offers</b></span>
	<table class="table tbl-hover">
	<tbody>
		<tr class="yellow">
			<td><b></b></td>
			<td><b>Name</b></td>
			<td><b>Price</b></td>
		</tr>
		<tr><td><a href="/item.php?name=blank_rune"><img src="/itemSprites_792/3147.png" /></a></td><td><a href="/item.php?name=blank_rune">a blank rune</a></td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=spellbook"><img src="/itemSprites_792/3059.png" /></a></td><td><a href="/item.php?name=spellbook">a spellbook</a></td><td>150 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_11.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of lifefluid</td><td>60 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_10.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of manafluid</td><td>55 GP</td></tr>

	</tbody>
	</table>
</div>
<div style="float: left; width: 50%">
	<span><b>Buy Offers</b></span>
	<table class="table tbl-hover">
	<tbody>
		<tr class="yellow">
			<td><b></b></td>
			<td><b>Name</b></td>
			<td><b>Price</b></td>
		</tr>
		<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874.png" /></a></td><td><a href="/item.php?name=vial">a vial</a></td><td>5 GP</td></tr>

	</tbody>
	</table>
</div>
<div class="clear"></div>