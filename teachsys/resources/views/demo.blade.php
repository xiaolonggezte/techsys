

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>ueditor demo</title>
</head>

<body>
<form action="/pros/add" method="post">
    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
            这里写你的初始化内容
    </script>
    <button type="submit">提交保存</button>
</form>
<!-- 配置文件 -->
<script type="text/javascript" src="{{ asset('UEditor/ueditor.config.js') }}" ></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{ asset('UEditor/ueditor.all.js') }}"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</body>

</html>


