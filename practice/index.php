<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="css/header.css">
    <title>切版練習</title>
</head>

<body>
	<?php include('header.php') ?>
		
		



	<!-- <?php include('footer.php') ?> -->




</body>	

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>

	// $('a').removeClass('active');
	// if($('a').attr('href') == Url){
	// 	$(this).addClass('active')
	// }
	// $('a').removeClass('active');
	// var Url  = url.substr(url.indexOf('practice/'));//index.php
	// if($('a').attr('href') == Url){
	// 	$(this).addClass('active')
	// }

	var url = (location.href.lastIndexOf('/'));
	var Url = location.href.substr(url+1);
	// alert(Url);

	// $('a').removeClass('active');
	// if($('a').attr('href') == Url){
	// 	$(this).addClass('active')
	// }else{

	// };

	var i = 0;
	document.getElementsByTagName('a').length;
	for(var i = 0;i<document.getElementsByTagName('a').length; i++){
		if(document.getElementsByTagName('a')[i].href == location.href ){
			console.log(123)
			document.getElementsByTagName('a')[i].className = 'active';
		}else{
			console.log(document.getElementsByTagName('a')[i].href)
		}
	}
</script>
</html>