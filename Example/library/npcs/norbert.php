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
<h2>Norbert</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=128&b=0&c=6&d=79&e=93&f=14&h=3');"></div>
	</div>
	<div class="npc-greetings">"Wow! The great PLAYERNAME visiting our shop! LOOK PEOPLE, LOOK HERE!."</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32953,32103,7,3&e=;32103,32953,7,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=coat"><img src="/itemSprites_792/3562.png" /></a></td><td><a href="/item.php?name=coat">a coat</a></td><td>8 GP</td></tr>
<tr><td><a href="/item.php?name=doublet"><img src="/itemSprites_792/3379.png" /></a></td><td><a href="/item.php?name=doublet">a doublet</a></td><td>16 GP</td></tr>
<tr><td><a href="/item.php?name=jacket"><img src="/itemSprites_792/3561.png" /></a></td><td><a href="/item.php?name=jacket">a jacket</a></td><td>12 GP</td></tr>
<tr><td><a href="/item.php?name=leather_armor"><img src="/itemSprites_792/3361.png" /></a></td><td><a href="/item.php?name=leather_armor">a leather armor</a></td><td>25 GP</td></tr>
<tr><td><a href="/item.php?name=studded_armor"><img src="/itemSprites_792/3378.png" /></a></td><td><a href="/item.php?name=studded_armor">a studded armor</a></td><td>90 GP</td></tr>

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