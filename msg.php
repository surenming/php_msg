
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

</script>




<style type="text/css">
</style>
</head>
<body>
	<p style="color: red;">-----表单验证：-----</p>

	<form action="pub.php" method="post">
		<!-- method不设置默认为get -->
		<p>
			留言标题：
			<input type="text" name="title" />
		</p>
		<p>
			留言者：
			<input type="text" name="username" />
		</p>
		<p>
			留言内容：
			<br />
			<textarea name="content" rows="10" cols="50"></textarea>
		</p>

		<p>
			<input type="submit" value="提交留言" />
		</p>

	</form>

</body>
</html>

