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
<h2>Miraia</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=150&b=3&c=95&d=0&e=7&f=115&h=3');"></div>
	</div>
	<div class="npc-greetings">"Daraman's blessings, PLAYERNAME. Welcome to the Enlightened Oasis."</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=33238,32483,8,3&e=;32483,33238,8,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=bread"><img src="/itemSprites_792/3600.png" /></a></td><td><a href="/item.php?name=bread">a bread</a></td><td>4 GP</td></tr>
<tr><td><a href="/item.php?name=mug"><img src="/itemSprites_792/2880.png" /></a></td><td><a href="/item.php?name=mug">a mug</a> of lemonade</td><td>3 GP</td></tr>
<tr><td><a href="/item.php?name=mug"><img src="/itemSprites_792/2880.png" /></a></td><td><a href="/item.php?name=mug">a mug</a> of water</td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=mug"><img src="/itemSprites_792/2880.png" /></a></td><td><a href="/item.php?name=mug">a mug</a> of milk</td><td>5 GP</td></tr>
<tr><td><a href="/item.php?name=cheese"><img src="/itemSprites_792/3607.png" /></a></td><td><a href="/item.php?name=cheese">cheese</a></td><td>6 GP</td></tr>
<tr><td><a href="/item.php?name=ham"><img src="/itemSprites_792/3582.png" /></a></td><td><a href="/item.php?name=ham">ham</a></td><td>8 GP</td></tr>
<tr><td><a href="/item.php?name=meat"><img src="/itemSprites_792/3577.png" /></a></td><td><a href="/item.php?name=meat">meat</a></td><td>5 GP</td></tr>

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