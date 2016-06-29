<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Share Your Knowledge</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
	 <style>
		body { 
		  background: url(img/balairung.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
	</style>
</head>

<body style="">
	<div class="login-container">
	<h2>Share Your Knowledge</h2>
        <div class="login-header bordered">
            <a class="btn btn-default" href="index.php" role="button">Depan</a> |  <a class="btn btn-default" href="galeri.php" role="button">Galeri</a>
        </div>
		<hr>
<form action="upload.php" enctype="multipart/form-data" method="post">
<div class="login-field">
                <label for="username">Penjelasan Gambar</label></p>
               <textarea type="text" name="judul" cols="200" rows="20"></textarea>
                <i class="icon-user"></i>
            </div>
			<p><div class="login-field">
                <label for="gambar">Pilih Gambar</label>
               <input type="file" name="userfile" size="40" />
                <i class="icon-lock"></i>
				<button name="submit"  type="submit" class="pull-right btn btn-large blue">Upload Image </button>
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> <!-- dalam byte {2000000b = 2Mb} -->
				
     <div class="login-button clearfix">
                <label class="checkbox pull-left">
           <div class="checker"><span><input type="checkbox" class="uniform" name="checkbox1"></span></div>Copyright &copy Multimedia & Game Komsi UGM 2016
                </label>
    </div>


</form>
</div>
</body>
</html>
