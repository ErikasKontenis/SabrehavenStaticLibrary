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
<h2>Mortimer</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=133&b=0&c=57&d=113&e=95&f=113&h=3');"></div>
	</div>
	<div class="npc-greetings">"Greetings, what can I do for you?"</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32499,31626,8,3&e=;31626,32499,8,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=botanists_container"><img src="/itemSprites_792/4867.png" /></a></td><td><a href="/item.php?name=botanists_container">a botanist's container</a></td><td>500 GP</td></tr>
<tr><td><a href="/item.php?name=butterfly_conservation_kit"><img src="/itemSprites_792/4863.png" /></a></td><td><a href="/item.php?name=butterfly_conservation_kit">a butterfly conservation kit</a></td><td>250 GP</td></tr>
<tr><td><a href="/item.php?name=hydra_egg"><img src="/itemSprites_792/4839.png" /></a></td><td><a href="/item.php?name=hydra_egg">a hydra egg</a></td><td>500 GP</td></tr>
<tr><td><a href="/item.php?name=atlas"><img src="/itemSprites_792/6108.png" /></a></td><td><a href="/item.php?name=atlas">an atlas</a></td><td>150 GP</td></tr>
<tr><td><a href="/item.php?name=ectoplasm_container"><img src="/itemSprites_792/4852.png" /></a></td><td><a href="/item.php?name=ectoplasm_container">an ectoplasm container</a></td><td>750 GP</td></tr>
<tr><td><a href="/item.php?name=old_parchment"><img src="/itemSprites_792/4831.png" /></a></td><td><a href="/item.php?name=old_parchment">an old parchment</a></td><td>500 GP</td></tr>
<tr><td><a href="/item.php?name=orichalcum_pearl"><img src="/itemSprites_792/5021.png" /></a></td><td><a href="/item.php?name=orichalcum_pearl">an orichalcum pearl</a></td><td>80 GP</td></tr>

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