
@extends('layouts.app')

@section('title','test')


@section('content')

    <div>
        <a href="" id="test"> <h1>测试链接</h1></a>
    </div>
@endsection

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#test').click(function() {
           $.ajax({
               url:"/users/info",
               method:"post",
               success:function() {
            },
           });
        });
    });
</script>