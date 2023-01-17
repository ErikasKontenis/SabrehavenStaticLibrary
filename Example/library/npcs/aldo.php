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
<h2>Aldo</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=128&b=0&c=40&d=37&e=116&f=76&h=3');"></div>
	</div>
	<div class="npc-greetings">"Just great, another ... 'customer'. Hello, PLAYERNAME."</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32953,32110,7,3&e=;32110,32953,7,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=leather_helmet"><img src="/itemSprites_792/3355.png" /></a></td><td><a href="/item.php?name=leather_helmet">a leather helmet</a></td><td>12 GP</td></tr>
<tr><td><a href="/item.php?name=studded_helmet"><img src="/itemSprites_792/3376.png" /></a></td><td><a href="/item.php?name=studded_helmet">a studded helmet</a></td><td>63 GP</td></tr>
<tr><td><a href="/item.php?name=leather_boots"><img src="/itemSprites_792/3552.png" /></a></td><td><a href="/item.php?name=leather_boots">leather boots</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=leather_legs"><img src="/itemSprites_792/3559.png" /></a></td><td><a href="/item.php?name=leather_legs">leather legs</a></td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=sandals"><img src="/itemSprites_792/3551.png" /></a></td><td><a href="/item.php?name=sandals">sandals</a></td><td>2000 GP</td></tr>
<tr><td><a href="/item.php?name=studded_legs"><img src="/itemSprites_792/3362.png" /></a></td><td><a href="/item.php?name=studded_legs">studded legs</a></td><td>60 GP</td></tr>

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