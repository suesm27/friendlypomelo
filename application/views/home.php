<html>
<head>
	<meta charset="UTF-8">
	<title>Friendly Pomelo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script src="/assets/jquery.ui.touch-punch.min.js"></script>
 <script type="text/javascript">
 $(document).ready(function() {
   $(function(){
      $('#bouncable').click(function () {
        $(this).effect("bounce", { times:5 }, 2000);
      });
    });
   $(function() {
    $( "#draggable" ).draggable();
    });
 });
 </script>
 <link rel="stylesheet" type="text/css" href="/assets/style.css">
</head>
<body>
  <div class="main-container">
    <div class="container">
      <div id="bouncable">
        <h3>Click me!</h3>
        <img class="upright" src="/assets/images/pomelo.png">
      </div>
      <div class="spacer">
      </div>
      <div id="draggable" class="ui-widget-content" style="border: none; width: 192px">
        <div id="animated-example" class="animated swing">
        <img class="rotate45" src="/assets/images/pomelo.png">
        <h3>Drag me!</h3>
      </div>
    </div>
      <div class="spacer">
      </div>
      <div id="animated-example3" class="animated3 shake">
          <img class="upright" style="width: 93px" src="/assets/images/pomelo.png">
          <img class="upright" style="width: 93px" src="/assets/images/pomelo.png">
      </div>
      <div class="spacer">
      </div>
      <div id="animated-example4" class="animated4 hinge">
         <img class="rotate105" src="/assets/images/pomelo.png">
      </div>
    </div> <!-- /container -->
  </div>
</body>
</html>