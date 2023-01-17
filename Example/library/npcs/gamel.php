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
<h2>Gamel</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=129&b=0&c=79&d=132&e=115&f=116&h=3');"></div>
	</div>
	<div class="npc-greetings">"Pssst! Be silent. Do you wish to buy something?"</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32337,32207,9,3&e=;32207,32337,9,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=brass_helmet"><img src="/itemSprites_792/3354.png" /></a></td><td><a href="/item.php?name=brass_helmet">a brass helmet</a></td><td>120 GP</td></tr>
<tr><td><a href="/item.php?name=dagger"><img src="/itemSprites_792/3267.png" /></a></td><td><a href="/item.php?name=dagger">a dagger</a></td><td>5 GP</td></tr>
<tr><td><a href="/item.php?name=mace"><img src="/itemSprites_792/3286.png" /></a></td><td><a href="/item.php?name=mace">a mace</a></td><td>90 GP</td></tr>
<tr><td><a href="/item.php?name=staff"><img src="/itemSprites_792/3289.png" /></a></td><td><a href="/item.php?name=staff">a staff</a></td><td>40 GP</td></tr>
<tr><td><a href="/item.php?name=throwing_knife"><img src="/itemSprites_792/3298.png" /></a></td><td><a href="/item.php?name=throwing_knife">a throwing knife</a></td><td>25 GP</td></tr>

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