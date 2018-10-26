<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

</head>
<body>
<div class="flex-center position-ref full-height">
    <h1>mywelcome</h1>
    <p>
        欢迎<?php echo $name ?>莅临指导!
        欢迎{{ $name or '肖龙'}}莅临指导!

        今年<?php echo $age ?>
        今年{{ $age or 20}}

    </p>
    @if($name == '李明')
        你好
    @else
        bushi
    @endif
</div>
</body>
</html>
