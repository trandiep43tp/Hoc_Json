<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><!--Có dòng này mới tương thích với tất cả các thiết bị-->
<title>Tự Học JQuery</title>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
<script src="js/jquery-3.1.1.js"></script>
<script language="javascript">
	
		

</script>

</head>
<body>
	<h1>HỌC JSON</h1>
<?php  
	//cho một chuỗi json
	/*	$json = '{
			"title": "JavaScript: The Definitive Guide",
			"author": "David Flanagan",
			"edition": 6
		}';  */
		$json='{"error":"success","username":"T\u00ean \u0111\u0103ng nh\u1eadp \u0111\u00e3 t\u1ed3n t\u1ea1i","email":""}';
	//xuất chuối json 
		echo $json.'<br>';
	//chuyển sang dạng object
		$obj = json_decode($json);
	//xuất lên màn hình
		var_dump($obj);
	// xuất tiêu đề của object
	//echo $obj->title; // JavaScript: The Definitive Guide 
	//dùng vòng lặp xuất hết các giá trị
	foreach($obj as $key=>$value)
	{
		echo '<b>'.$key.'</b> :'.$value.'<br>';
	}
?>    
 	 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>