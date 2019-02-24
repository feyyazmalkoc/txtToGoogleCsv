<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Convert txt to Google CSV to add contacts into Google">
    <meta name="author" content="Feyyaz Malkoç">

    <title>Convert txt to Google CSV</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
	html, body {
  height: 100%;
}

/* http://jsfiddle.net/hashem/ut5sbqvz/ */
.jumbotron.vertical-center {
  margin-bottom: 0; 
}

.vertical-center {
  min-height: 100%;  
  min-height: 100vh; 

  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex; 
  

    -webkit-box-align : center;
  -webkit-align-items : center;
       -moz-box-align : center;
       -ms-flex-align : center;
          align-items : center;
  

  width: 100%;

         -webkit-box-pack : center;
            -moz-box-pack : center;
            -ms-flex-pack : center;
  -webkit-justify-content : center;
          justify-content : center;
}
	
	</style>
  </head>

  <body>
  <div class="jumbotron vertical-center">
  <div class="container">
  <div class="row">
  <div class="col">
  </div>
    <div class="col-6">
  <h1>Convert txt to Google CSV</h1>
<form action="action.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="file">Select a .txt file.(Bir .txt dosyası seçin)</label>
    <input name="file" type="file" class="form-control-file" id="file">
  </div>
  <div class="form-group">
    <label for="tag">Tag</label>
    <input name="tag" type="text" class="form-control" id="tag" >
  </div>
  <button type="submit" class="btn btn-primary">Convert</button>
</form>
</div>
<div class="col">
  </div>
</div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>