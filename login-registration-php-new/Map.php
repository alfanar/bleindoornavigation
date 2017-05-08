<?php
$file = fopen("log.txt","r");
$m_b=fgets($file);
$m = explode(",", $m_b);
fclose($file);
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loading MySQL Records on Drop Down Selection using PHP jQuery</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<style type="text/css">
<head>
select{
  
  width:250px;
  padding:5px;
  border-radius:3px;
}
</style>
<script src="jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{   
  // function to get all records from table
  function getAll(){
    
    $.ajax
    ({
      url: 'getproducts.php',
      data: 'action=showAll',
      cache: false,
      success: function(r)
      {
        $("#display").html(r);
      }
    });     
  }
  
  getAll();
  // function to get all records from table
  
  
  // code to get all records from table via select box
  $("#getProducts").change(function()
  {       
    var id = $(this).find(":selected").val();

    var dataString = 'action='+ id;
        
    $.ajax
    ({
      url: 'getproducts.php',
      data: dataString,
      cache: false,
      success: function(r)
      {
        $("#display").html(r);
      } 
    });
  })
  // code to get all records from table via select box
});
</script>
</head>
<body>
 <div class="container">
            <li>
            <a href="Map.php" target="_blank">
            <input type="search" id="mySearch" placeholder="Search for something..">
            <button type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-search"></span> Search
            </button> 
            </a></li>
          </ul>
          
      </div>

<svg  width="800" height="700">

<circle id="blue_circle" cx=<?=$m['0']+10;?> cy=<?=$m['1']+10;?> r="10" fill="blue" />
<rect x="17" y="0" width="685" height="500" style="fill:white;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
 <rect x="17" y="11" width="146" height="113" style="stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9"/>
  <text x="82" y="62" fill="black">8114</text>
  
 <rect x="163" y="0" width="115" height="235" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
  <text x="221" y="118" fill="black">8113</text>
 <rect x="17" y="125" width="108" height="105" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
  <text x="71" y="178" fill="black">8115</text>
 <rect x="278" y="17" width="97" height="123" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
  <text x="327" y="79" fill="black">8111</text>
 <rect x="278" y="140" width="62" height="95" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />  
  <text x="300" y="188" font-size="10" fill="black">8112</text>
 <rect x="375" y="17" width="60" height="218" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />  
  <text x="395" y="126" font-size="10" fill="black">8110</text>
 <rect x="435" y="0" width="117" height="195" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />  
  <text x="494" y="118" fill="black">8108</text>
   <rect x="435" y="195" width="117" height="40" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />  
  <text x="494" y="230" fill="black">8109</text>
 <rect x="552" y="21" width="141" height="104" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />  
   <text x="623" y="73"  fill="black">8107</text>
 <rect x="585" y="128" width="108" height="55" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
   <text x="620" y="170"  fill="black">8106</text>
   <rect x="585" y="183" width="108" height="55" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
   <text x="620" y="220"  fill="black">8105</text>
 <rect x="17" y="311" width="255" height="169" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
   <text x="145" y="396" fill="black">8101</text>
 <rect x="272" y="311" width="53" height="119" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
   <text x="290" y="371" font-size="10" fill="black">8102</text>
 <rect x="390" y="311" width="53" height="119" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
   <text x="405" y="370" font-size="10" fill="black">8103</text>
 <rect x="443" y="311" width="255" height="169" style="fill:blue;stroke:black;stroke-width:5;fill-opacity:0.1;stroke-opacity:0.9" />
   <text x="571" y="396" fill="black">8104</text>
 
</svg>
</body>
</html>