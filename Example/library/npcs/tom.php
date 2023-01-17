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
<h2>Tom</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=144&b=1&c=113&d=115&e=58&f=115&h=3');"></div>
	</div>
	<div class="npc-greetings">"I'm Tom the Tanner. How can I help you PLAYERNAME?"</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32085,32199,8,3&e=;32199,32085,8,9&no_buttons=1"></iframe>
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
		<tr><td></td><td>Sells nothing.</td><td></td></tr>
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
		<tr><td><a href="/item.php?name=bear_paw"><img src="/itemSprites_792/5896.png" /></a></td><td><a href="/item.php?name=bear_paw">a bear paw</a></td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=dead_wolf"><img src="/itemSprites_792/4007.png" /></a></td><td><a href="/item.php?name=dead_wolf">a dead wolf</a></td><td>5 GP</td></tr>
<tr><td><a href="/item.php?name=minotaur_leather"><img src="/itemSprites_792/5878.png" /></a></td><td><a href="/item.php?name=minotaur_leather">a minotaur leather</a></td><td>12 GP</td></tr>
<tr><td><a href="/item.php?name=wolf_paw"><img src="/itemSprites_792/5897.png" /></a></td><td><a href="/item.php?name=wolf_paw">a wolf paw</a></td><td>7 GP</td></tr>

	</tbody>
	</table>
</div>
<div class="clear"></div>