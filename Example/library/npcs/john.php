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
<h2>John</h2>
<div class="npc-profile">
	<div class="borderGuide container">
		<div class="imageT" style="background-image: url('/outfiter2/outfit.php?a=128&b=0&c=58&d=68&e=12&f=114&h=3');"></div>
	</div>
	<div class="npc-greetings">"Hello, hello, PLAYERNAME! Please come in, look, and buy!"</div>
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
	<iframe id="mapper" style="width: 98%;height:800px; margin-left: auto;margin-right: auto;" src="https://www.tibiaroyal.com/apps/n_map/?lang=en&cor=32138,32904,8,3&e=;32904,32138,8,9&no_buttons=1"></iframe>
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
		<tr><td><a href="/item.php?name=backpack_8"><img src="/itemSprites_792/2872.png" /></a></td><td><a href="/item.php?name=backpack_8">a backpack</a></td><td>30 GP</td></tr>
<tr><td><a href="/item.php?name=bag_8"><img src="/itemSprites_792/2864.png" /></a></td><td><a href="/item.php?name=bag_8">a bag</a></td><td>10 GP</td></tr>
<tr><td><a href="/item.php?name=fishing_rod"><img src="/itemSprites_792/3483.png" /></a></td><td><a href="/item.php?name=fishing_rod">a fishing rod</a></td><td>300 GP</td></tr>
<tr><td><a href="/item.php?name=pick"><img src="/itemSprites_792/3456.png" /></a></td><td><a href="/item.php?name=pick">a pick</a></td><td>100 GP</td></tr>
<tr><td><a href="/item.php?name=rope"><img src="/itemSprites_792/3003.png" /></a></td><td><a href="/item.php?name=rope">a rope</a></td><td>100 GP</td></tr>
<tr><td><a href="/item.php?name=shovel"><img src="/itemSprites_792/3457.png" /></a></td><td><a href="/item.php?name=shovel">a shovel</a></td><td>100 GP</td></tr>
<tr><td><a href="/item.php?name=torch"><img src="/itemSprites_792/2920.png" /></a></td><td><a href="/item.php?name=torch">a torch</a></td><td>2 GP</td></tr>
<tr><td><a href="/item.php?name=treasure_map"><img src="/itemSprites_792/5090.png" /></a></td><td><a href="/item.php?name=treasure_map">a treasure map</a></td><td>1000 GP</td></tr>
<tr><td><a href="/item.php?name=very_noble-looking_watch"><img src="/itemSprites_792/6091.png" /></a></td><td><a href="/item.php?name=very_noble-looking_watch">a very noble-looking watch</a></td><td>500 GP</td></tr>
<tr><td><a href="/item.php?name=worm"><img src="/itemSprites_792/3492.png" /></a></td><td><a href="/item.php?name=worm">a worm</a></td><td>2 GP</td></tr>

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