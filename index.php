<!DOCTYPE html>
<html>
  <head>
   <title>Clans</title>
   
   <link rel="stylesheet" type="text/css" href="/static/css/clans.css" />
   
   <script type="text/javascript" src="static/js/jquery/jquery-1.9.1.min.js"></script>
   <!--<script type="text/javascript" src="static/js/spryMap/spryMap-min2.js"></script>-->
   <script type="text/javascript" src="static/js/spryMap/spryMap-2.js"></script>
   <script type="text/javascript" src="static/js/clans.js"></script> 
  </head>
  <body>


	<div id="mapContainer" style="position: absolute; top: 0px; left: 0px; z-index: 1;">
		<div id="map_tiles" style="position:absolute; top:0px; left:0px; z-index:1;">
			<div style="left: 0px; top: 0px; width: 896px; height: 832px; background-image: url(/static/images/island-1.png);" class="tile islandtile" id="islandtile_383_256"></div>
			<div style="left: 900px; top: -14px; width: 932px; height: 600px; background-image: url(/static/images/island-2.png);" class="tile islandtile" id="islandtile_384_247"></div>
			<div style="left: 263px; top: 500px; width: 1280px; height: 600px; background-image: url(/static/images/island-3.png);" class="tile islandtile" id="islandtile_388_257"></div>
        </div>
        <div id="castles">
            <div id="castle_macdonald" class="castle" title="Clan MacDonald"></div>
            <div id="castle_macleod" class="castle" title="Clan MacLeod"></div>
            <div id="castle_macneil" class="castle" title="Clan MacNeil"></div>
            <div id="castle_fraser" class="castle" title="Clan Fraser"></div>
            <div id="castle_cameron" class="castle" title="Clan Cameron"></div>
            <div id="castle_maclean" class="castle" title="Clan MacLean"></div>
        </div>

    </div>
  
    
    <script type="text/javascript">
        $(document).ready(function() {
            var map = new SpryMap({id : "mapContainer",
                         height: 100,
                         width: 100,
                         heightWidthType: "%",
                         startX: 0,
                         startY: 0,
                         scrolling: true,
                         lockEdges: false,
                         cssClass: "map-container"});
        });
    </script>
        
	
  </body>
</html>