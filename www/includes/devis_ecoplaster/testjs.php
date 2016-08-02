<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>hide demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <style>
  div {
    width: 100px;
    height: 100px;
    background: #ccc;
    border: 1px solid #000;
  }
  </style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
 
<button>hide the div</button>
<div></div>
 
<script>
$( "button" ).click(function() {
  $( "div" ).hide( "drop", { direction: "right" }, "slow" );
});
</script>
 
</body>
</html>