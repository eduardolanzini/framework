<!DOCTYPE html>
<html>
<head>

	<title>Framework <?=(isset($title))?' - '.$title : ''?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="" />

	<meta name='theme-color' content='#111111'>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>

<body>

	<?=$content?>	

<footer><span>Eduardo Lanzini Framework</span></footer>

<style type="text/css">

	body{
		margin:0;
		padding: 0;
		font-family:Tahoma;
		 background: #F6F6F6;
	}
	
	footer{
		position: absolute;
		bottom: 0;
		width: 100%;
		background: #111;
		text-align: center;
	}

	footer span{
		display: block;
		color: white;
		margin: 10px;

	}
</style>
</body>
</html>