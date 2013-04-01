<!DOCTYPE html>
<html>
  <head>
   <title>Clans</title>
   
   <link rel="stylesheet" type="text/css" href="/static/css/clans.css" />
   
   <script type="text/javascript" src="static/js/jquery/jquery-1.9.1.min.js"></script>
   <!--<script type="text/javascript" src="static/js/spryMap/spryMap-min2.js"></script>-->
   <script type="text/javascript" src="static/js/spryMap/spryMap-2.js"></script>
   <script type="text/javascript" src="static/js/clans.js"></script> 
   <script type="text/javascript" src="static/js/drawHex.js"></script> 

  </head>
  <body>


	<div id="mapContainer" style="position: absolute; top: 0px; left: 0px; z-index: 1;">

        <canvas id="hexes" style="z-index: 1; position: absolute; left:0px; top:25px;"></canvas>

    </div>
    
    <script type="text/javascript">
    
        var ctxHexes;
        
        $(document).ready(function() {

            var map = new SpryMap({
                id : "mapContainer",
                height: 100,
                width: 100,
                heightWidthType: "%",
                startX: 0,
                startY: 0,
                scrolling: true,
                lockEdges: false,
                cssClass: "map-container"
            });
            
            setCanvases();
            drawHexes(ctxHexes);
        });
        
        function setCanvases(){
    		ctxHexes = initialize('hexes');
    	}
        
        function initialize(canvasId){
        	var canvas = document.getElementById(canvasId);
    		if(canvas.getContext){
    			var context = canvas.getContext('2d');
    			context.canvas.width = CANVAS_WIDTH;
    			context.canvas.height = CANVAS_HEIGHT;
    		}
    		
    		return context;
    	}
    </script>
        
	
  </body>
</html>