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
<h2>Nelliem</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=160&b=0&c=115&d=100&e=105&f=76&h=3');"></div>
	</div>
	<div class="npc-greetings">"Greetings, PLAYERNAME, traveller from afar..."</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32883,32086,7,3&e=;32086,32883,7,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=broom"><img src="/itemSprites_792/3454.png" /></a></td><td><a href="/item.php?name=broom">a broom</a></td><td>12 GP</td></tr>
<tr><td><a href="/item.php?name=crowbar"><img src="/itemSprites_792/3304.png" /></a></td><td><a href="/item.php?name=crowbar">a crowbar</a></td><td>260 GP</td></tr>
<tr><td><a href="/item.php?name=fishing_rod"><img src="/itemSprites_792/3483.png" /></a></td><td><a href="/item.php?name=fishing_rod">a fishing rod</a></td><td>150 GP</td></tr>
<tr><td><a href="/item.php?name=hoe"><img src="/itemSprites_792/3455.png" /></a></td><td><a href="/item.php?name=hoe">a hoe</a></td><td>15 GP</td></tr>
<tr><td><a href="/item.php?name=machete"><img src="/itemSprites_792/3308.png" /></a></td><td><a href="/item.php?name=machete">a machete</a></td><td>35 GP</td></tr>
<tr><td><a href="/item.php?name=pick"><img src="/itemSprites_792/3456.png" /></a></td><td><a href="/item.php?name=pick">a pick</a></td><td>50 GP</td></tr>
<tr><td><a href="/item.php?name=pitchfork"><img src="/itemSprites_792/3451.png" /></a></td><td><a href="/item.php?name=pitchfork">a pitchfork</a></td><td>25 GP</td></tr>
<tr><td><a href="/item.php?name=rake"><img src="/itemSprites_792/3452.png" /></a></td><td><a href="/item.php?name=rake">a rake</a></td><td>20 GP</td></tr>
<tr><td><a href="/item.php?name=rope"><img src="/itemSprites_792/3003.png" /></a></td><td><a href="/item.php?name=rope">a rope</a></td><td>50 GP</td></tr>
<tr><td><a href="/item.php?name=scythe"><img src="/itemSprites_792/3453.png" /></a></td><td><a href="/item.php?name=scythe">a scythe</a></td><td>25 GP</td></tr>
<tr><td><a href="/item.php?name=shovel"><img src="/itemSprites_792/3457.png" /></a></td><td><a href="/item.php?name=shovel">a shovel</a></td><td>20 GP</td></tr>
<tr><td><a href="/item.php?name=worm"><img src="/itemSprites_792/3492.png" /></a></td><td><a href="/item.php?name=worm">a worm</a> (6x)</td><td>5 GP</td></tr>

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
		<tr><td></td><td>Buys nothing.</td><td></td></tr>
	</tbody>
	</table>
</div>
<div class="clear"></div>