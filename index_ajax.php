<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>[class] Panel + AJAX (1)</title>
  
  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
<div class="container"><h2>Example Tab</h2></div>
<div id="exTab" class="container">	
<ul  class="nav nav-pills">
	<li class="active">
        <a id="btn1" href="#1b" data-toggle="tab">讀取文字檔</a>
			</li>
			<li><a id="btn2" href="#2b" data-toggle="tab">讀取網頁檔</a>
			</li>
			<li><a id="btn3" href="#3b" data-toggle="tab">讀取PHP檔</a>
			</li>
  		<li><a id="btn4" href="#4b" data-toggle="tab">讀取外部網站</a>
	</li>
</ul>

<div class="tab-content clearfix">
    <div class="tab-pane active" id="1b">
        <h3>Same as example 1 but we have now styled the tab's corner</h3>
	</div>
	<div class="tab-pane" id="2b">
        <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
	</div>
    <div class="tab-pane" id="3b">
         <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
	</div>
    <div class="tab-pane" id="4b">
        <h3>We use css to change the background color of the content to be equal to the tab</h3>
	</div>
</div>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
