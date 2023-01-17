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
<h2>Rudolph</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=128&b=0&c=41&d=29&e=78&f=76&h=3');"></div>
	</div>
	<div class="npc-greetings">"Oh, a customer. Hello PLAYERNAME."</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=33212,31812,7,3&e=;31812,33212,7,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=cape"><img src="/itemSprites_792/3565.png" /></a></td><td><a href="/item.php?name=cape">a cape</a></td><td>9 GP</td></tr>
<tr><td><a href="/item.php?name=green_tunic"><img src="/itemSprites_792/3563.png" /></a></td><td><a href="/item.php?name=green_tunic">a green tunic</a></td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=jacket"><img src="/itemSprites_792/3561.png" /></a></td><td><a href="/item.php?name=jacket">a jacket</a></td><td>12 GP</td></tr>
<tr><td><a href="/item.php?name=scarf"><img src="/itemSprites_792/3572.png" /></a></td><td><a href="/item.php?name=scarf">a scarf</a></td><td>15 GP</td></tr>
<tr><td><a href="/item.php?name=leather_boots"><img src="/itemSprites_792/3552.png" /></a></td><td><a href="/item.php?name=leather_boots">leather boots</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=leather_legs"><img src="/itemSprites_792/3559.png" /></a></td><td><a href="/item.php?name=leather_legs">leather legs</a></td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=sandals"><img src="/itemSprites_792/3551.png" /></a></td><td><a href="/item.php?name=sandals">sandals</a></td><td>2000 GP</td></tr>

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