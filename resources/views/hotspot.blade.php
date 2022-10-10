<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="">
  <title>jQuery UI Draggable - Default functionality-codecheef.org</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<style>
    #pointer_div {
	background-image: url('http://www.emanueleferonato.com/images/sun.jpg');
	width: 500px;
	height: 333px;
}
#cross {
	position: relative;
	visibility: hidden;
	z-index: 2;
	color: red;
	font-size: 24px;
}
</style>
<body>



<form name="pointform" method="post">
<div id="pointer_div" onclick="point_it(event)"><i id="cross" class="fa fa-times"></i></div>
You pointed on x = <input type="text" name="form_x" size="4" /> - y = <input type="text" name="form_y" size="4" />
</form>
<Script>
    function point_it(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	document.getElementById("cross").style.left = (pos_x - 6).toString() + "px";
	document.getElementById("cross").style.top = (pos_y - 10).toString() + "px";
	document.getElementById("cross").style.visibility = "visible" ;
	document.pointform.form_x.value = pos_x;
	document.pointform.form_y.value = pos_y;
}
</Script>


</body>
</html>