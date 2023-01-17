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
<h2>Sandra</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=140&b=1&c=115&d=95&e=127&f=76&h=3');"></div>
	</div>
	<div class="npc-greetings">"Hello PLAYERNAME."</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=33258,31840,8,3&e=;31840,33258,8,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_11.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of lifefluid</td><td>60 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_10.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of manafluid</td><td>55 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_6.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of slime</td><td>12 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_5.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of blood</td><td>15 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_8.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of urine</td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_7.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of oil</td><td>20 GP</td></tr>
<tr><td><a href="/item.php?name=vial"><img src="/itemSprites_792/2874_1.png" /></a></td><td><a href="/item.php?name=vial">a vial</a> of water</td><td>8 GP</td></tr>

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