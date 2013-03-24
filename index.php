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
            <img id="mainMap" src="/static/images/map-6.jpg" usemap="#scotlandImageMap" border="0" width="1964" height="2135" alt="" />
            <map id="scotlandImageMap" name="scotlandImageMap">
                <area shape="poly" alt="Kirkwall" coords="1124,207,1082,206,1082,162,1123,165,1123,188" href="" target="" />
            	<area shape="poly" alt="The Orkney Isles" coords="1201,193,1334,194,1335,214,1201,212" href="" target="" />
            	<area shape="poly" alt="Thurso" coords="1003,353,1041,350,1046,364,1045,396,999,396,1003,354" href="" target="" />
            	<area shape="poly" alt="Caitness" coords="922,417,1003,420,1005,439,924,436" href="" target="" />
            	<area shape="poly" alt="Dornock" coords="841,628,885,631,882,671,840,669" href="" target="" />
            	<area shape="poly" alt="Sutherland" coords="840,568,929,569,928,590,841,587" href="" target="" />
            	<area shape="poly" alt="Ullapool" coords="655,688,696,690,695,731,655,731" href="" target="" />
            	<area shape="poly" alt="Ross & Cromarty" coords="683,777,819,779,819,799,682,799,683,786" href="" target="" />
            	<area shape="poly" alt="Stornaway" coords="355,479,394,477,400,524,350,522" href="" target="" />
            	<area shape="poly" alt="The Western Isles" coords="85,623,227,624,227,644,87,642" href="" target="" />
            	<area shape="poly" alt="Portree" coords="381,843,423,845,421,886,381,885" href="" target="" />
            	<area shape="poly" alt="Skye" coords="395,922,435,924,435,945,393,944" href="" target="" />
            	<area shape="poly" alt="Kyle" coords="597,923,639,926,639,965,598,966" href="" target="" />
            	<area shape="poly" alt="Lochalsh" coords="584,979,655,980,654,998,582,998" href="" target="" />
            	<area shape="poly" alt="Inverness" coords="840,831,886,832,885,874,837,874" href="" target="" />
            	<area shape="poly" alt="Inverness" coords="821,934,895,936,896,954,822,954" href="" target="" />
            	<area shape="poly" alt="Elgin" coords="1031,735,1073,739,1071,779,1030,779" href="" target="" />
            	<area shape="poly" alt="Moray" coords="1063,824,1117,825,1119,846,1062,845" href="" target="" />
            	<area shape="poly" alt="Kingussie" coords="984,940,1028,942,1027,983,980,983" href="" target="" />
            	<area shape="poly" alt="Badenoch" coords="863,1052,936,1055,936,1073,860,1073" href="" target="" />
            	<area shape="poly" alt="Aberdeen" coords="1312,938,1359,941,1358,980,1307,980" href="" target="" />
            	<area shape="poly" alt="Aberdeenshire" coords="1166,970,1279,971,1280,990,1164,991" href="" target="" />
            	<area shape="poly" alt="Fort William" coords="663,1111,708,1113,714,1153,648,1153" href="" target="" />
            	<area shape="poly" alt="Lochaber" coords="579,1077,654,1081,654,1095,575,1095" href="" target="" />
            	<area shape="poly" alt="Perth" coords="1000,1206,1044,1208,1040,1249,1002,1246" href="" target="" />
            	<area shape="poly" alt="Perth & Kinross" coords="922,1268,1051,1269,1050,1287,921,1288" href="" target="" />
            	<area shape="poly" alt="Dundee" coords="1176,1231,1221,1234,1221,1276,1177,1275" href="" target="" />
            	<area shape="poly" alt="Angus" coords="1160,1174,1212,1178,1212,1196,1158,1195" href="" target="" />
            	<area shape="poly" alt="Oban" coords="591,1297,632,1301,630,1340,588,1338" href="" target="" />
            	<area shape="poly" alt="Argyll" coords="661,1348,713,1346,714,1366,660,1367" href="" target="" />
            	<area shape="poly" alt="Stirling" coords="941,1428,980,1432,981,1473,940,1472,939,1452" href="" target="" />
            	<area shape="poly" alt="Stirling" coords="822,1436,880,1439,880,1459,822,1455" href="" target="" />
            	<area shape="poly" alt="St. Andrews" coords="1141,1295,1183,1301,1192,1340,1127,1341" href="" target="" />
            	<area shape="poly" alt="Fife" coords="1103,1371,1129,1366,1134,1390,1100,1389" href="" target="" />
            	<area shape="poly" alt="Glasgow" coords="802,1490,842,1495,843,1535,800,1534" href="" target="" />
            	<area shape="poly" alt="Clyde Valley" coords="819,1546,918,1542,922,1568,820,1565" href="" target="" />
            	<area shape="poly" alt="Edinburgh" coords="1055,1469,1094,1472,1100,1514,1048,1516" href="" target="" />
            	<area shape="poly" alt="Lothian" coords="1041,1542,1101,1543,1104,1559,1040,1559" href="" target="" />
            	<area shape="poly" alt="Ayr" coords="776,1688,818,1691,817,1731,774,1730" href="" target="" />
            	<area shape="poly" alt="Ayrshire" coords="789,1771,858,1772,858,1791,788,1793" href="" target="" />
            	<area shape="poly" alt="Lanark" coords="983,1681,1026,1684,1024,1725,982,1724" href="" target="" />
            	<area shape="poly" alt="Lanarkshire" coords="932,1639,1026,1643,1026,1660,931,1661" href="" target="" />
            	<area shape="poly" alt="Berwick" coords="1335,1516,1379,1519,1376,1560,1335,1559" href="" target="" />
            	<area shape="poly" alt="Borders" coords="1165,1675,1226,1678,1226,1694,1162,1694" href="" target="" />
            	<area shape="poly" alt="Dumfries" coords="1031,1876,1073,1879,1071,1920,1029,1918" href="" target="" />
            	<area shape="poly" alt="Dumfries & Galloway" coords="891,1843,1058,1846,1060,1866,890,1862" href="" target="" />
            </map>
       </div>

    </div>
    
    <script type="text/javascript">
        $(document).ready(function() {
        
            $(".castle").click(function(e){
                moveElement('army_macdonald',e.pageX,e.pageY);
            });
        
            var map = new SpryMap({
                id : "mapContainer",
                height: 100,
                width: 100,
                heightWidthType: "%",
                startX: -200,
                startY: 0,
                scrolling: true,
                lockEdges: true,
                cssClass: "map-container"
            });
        });
    </script>
        
	
  </body>
</html>