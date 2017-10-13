<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>
	<?php if(is_array($typeArr)): foreach($typeArr as $key=>$v): ?><a href="/TinkPHP04/index.php/Home/News/lister/tid/<?php echo ($v["id"]); ?>"><?php echo ($v["tname"]); ?></a>
	&nbsp;|&nbsp;<?php endforeach; endif; ?>
	<a href="/TinkPHP04/index.php/Home/User/register">注册</a>
	&nbsp;|&nbsp;
	<a href="/TinkPHP04/index.php/Home/News/tongji">统计每个分类下文章的条数</a>
</div>
<hr/>
</body>
</html>