<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="">
  <title>jQuery UI Draggable - Default functionality-codecheef.org</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style type="text/css">
	.facet-container{
  width: 700px;
}
.right {
  float: right;
}
.left {
  float: left;
}
p {
  clear: both;
  padding-top: 1em;
}
.facet-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
  margin-right: 10px;
  background: #eee;
  padding: 5px;
  width: 143px;
  min-height: 1.5em;
  font-size: 0.85em;
}
.facet-list li {
  margin: 5px;
  padding: 5px;
  font-size: 1.2em;
  width: 120px;
}
.facet-list li.placeholder {
  height: 1.2em
}
.facet {
  border: 1px solid #bbb;
  background-color: #fafafa;
  cursor: move;

}
.facet.ui-sortable-helper {
  opacity: 0.5;
}
.placeholder {
  border: 1px solid orange;
  background-color: #fffffd;
}
</style>

</head>
<body class="bg-light">
<div class="container">

<div class="row">
<div class="col-sm-12">

<div class="col-sm-6">
  <div class="left">
    <label>All Facets</label>
    <ul id="allFacets" class="facet-list" style="height:400px;width:400px">
      <li class="facet">Facet 2</li>
      <li class="facet">Facet 3</li>
      <li class="facet">Facet 5</li>
    </ul>
  </div>
</div>
  
<div class="col-sm-">
  <div class="right">
    <label>User Facets</label>
    <ul id="userFacets" class="facet-list" style="height:400px;width:400px">
    </ul>
  </div>
</div>

</div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
<script>
$(function() {
    $("#allFacets, #userFacets").sortable({
      connectWith: "ul",
      placeholder: "placeholder",
      delay: 150
    })
    .disableSelection()
    .dblclick( function(e){
      var item = e.target;
      if (e.currentTarget.id === 'allFacets') {
        //move from all to user
        $(item).fadeOut('fast', function() {
          $(item).appendTo($('#userFacets')).fadeIn('slow');
        });
      } else {
        //move from user to all
        $(item).fadeOut('fast', function() {
          $(item).appendTo($('#allFacets')).fadeIn('slow');
        });
      }
    });
  });
	</script>
</body>
</html> 