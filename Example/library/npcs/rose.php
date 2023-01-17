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
<h2>Rose</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=136&b=0&c=79&d=77&e=112&f=116&h=3');"></div>
	</div>
	<div class="npc-greetings">"Welcome to Crunor's Finest Warehouse, PLAYERNAME."</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32971,32034,7,3&e=;32034,32971,7,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=flower_bowl"><img src="/itemSprites_792/2983.png" /></a></td><td><a href="/item.php?name=flower_bowl">a flower bowl</a></td><td>6 GP</td></tr>
<tr><td><a href="/item.php?name=furniture_package_36"><img src="/itemSprites_792/2811.png" /></a></td><td><a href="/item.php?name=furniture_package_36">a furniture package</a></td><td>8 GP</td></tr>
<tr><td><a href="/item.php?name=furniture_package_37"><img src="/itemSprites_792/2812.png" /></a></td><td><a href="/item.php?name=furniture_package_37">a furniture package</a></td><td>50 GP</td></tr>
<tr><td><a href="/item.php?name=honey_flower"><img src="/itemSprites_792/2984.png" /></a></td><td><a href="/item.php?name=honey_flower">a honey flower</a></td><td>5 GP</td></tr>
<tr><td><a href="/item.php?name=potted_flower"><img src="/itemSprites_792/2985.png" /></a></td><td><a href="/item.php?name=potted_flower">a potted flower</a></td><td>5 GP</td></tr>
<tr><td><a href="/item.php?name=god_flowers"><img src="/itemSprites_792/2981.png" /></a></td><td><a href="/item.php?name=god_flowers">god flowers</a></td><td>5 GP</td></tr>

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