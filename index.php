<!DOCTYPE html>

<html>
    <head>
        <title> CSRF protection</title>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
                <br>
		<div align='center'>
			<a href="stplogin.php" class="button"><button type="submit" class="btn btn-success" id="syn" name="syn" >CSRF protection by Syncronize Token pattern </button></a>
		</div>
		<br>
		<div align='center'>
			<a href="dsclogin.php" class="button"><button type="submit" class="btn btn-info" id="dsc" name="dsc"> CSRF protection by double submit cookies </button></a>
		</div>
    </body>
</html>