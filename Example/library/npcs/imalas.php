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
<h2>Imalas</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=128&b=0&c=115&d=10&e=39&f=114&h=3');"></div>
	</div>
	<div class="npc-greetings">"Hello PLAYERNAME! What do you need?"</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32334,31801,8,3&e=;31801,32334,8,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=banana"><img src="/itemSprites_792/3587.png" /></a></td><td><a href="/item.php?name=banana">a banana</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=brown_bread"><img src="/itemSprites_792/3602.png" /></a></td><td><a href="/item.php?name=brown_bread">a brown bread</a></td><td>3 GP</td></tr>
<tr><td><a href="/item.php?name=carrot"><img src="/itemSprites_792/3595.png" /></a></td><td><a href="/item.php?name=carrot">a carrot</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=cherry"><img src="/itemSprites_792/3590.png" /></a></td><td><a href="/item.php?name=cherry">a cherry</a></td><td>1 GP</td></tr>
<tr><td><a href="/item.php?name=cookie"><img src="/itemSprites_792/3598.png" /></a></td><td><a href="/item.php?name=cookie">a cookie</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=melon"><img src="/itemSprites_792/3593.png" /></a></td><td><a href="/item.php?name=melon">a melon</a></td><td>8 GP</td></tr>
<tr><td><a href="/item.php?name=pumpkin"><img src="/itemSprites_792/3594.png" /></a></td><td><a href="/item.php?name=pumpkin">a pumpkin</a></td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=roll"><img src="/itemSprites_792/3601.png" /></a></td><td><a href="/item.php?name=roll">a roll</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=egg"><img src="/itemSprites_792/3606.png" /></a></td><td><a href="/item.php?name=egg">an egg</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=cheese"><img src="/itemSprites_792/3607.png" /></a></td><td><a href="/item.php?name=cheese">cheese</a></td><td>5 GP</td></tr>
<tr><td><a href="/item.php?name=grapes"><img src="/itemSprites_792/3592.png" /></a></td><td><a href="/item.php?name=grapes">grapes</a></td><td>3 GP</td></tr>

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