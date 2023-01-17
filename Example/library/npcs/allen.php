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
<h2>Allen</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=128&b=0&c=76&d=43&e=38&f=76&h=3');"></div>
	</div>
	<div class="npc-greetings">"Welcome to the Plank and Treasurechest Market, PLAYERNAME!"</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32991,32062,7,3&e=;32062,32991,7,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=furniture_package"><img src="/itemSprites_792/2775.png" /></a></td><td><a href="/item.php?name=furniture_package">a furniture package</a></td><td>40 GP</td></tr>
<tr><td><a href="/item.php?name=furniture_package_1"><img src="/itemSprites_792/2776.png" /></a></td><td><a href="/item.php?name=furniture_package_1">a furniture package</a></td><td>40 GP</td></tr>
<tr><td><a href="/item.php?name=furniture_package_2"><img src="/itemSprites_792/2777.png" /></a></td><td><a href="/item.php?name=furniture_package_2">a furniture package</a></td><td>15 GP</td></tr>
<tr><td><a href="/item.php?name=furniture_package_3"><img src="/itemSprites_792/2778.png" /></a></td><td><a href="/item.php?name=furniture_package_3">a furniture package</a></td><td>25 GP</td></tr>
<tr><td><a href="/item.php?name=furniture_package_4"><img src="/itemSprites_792/2779.png" /></a></td><td><a href="/item.php?name=furniture_package_4">a furniture package</a></td><td>55 GP</td></tr>

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