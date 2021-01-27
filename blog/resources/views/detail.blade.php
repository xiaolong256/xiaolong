@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="thumbnail">
<img src="https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fa4.att.hudong.com%2F27%2F67%2F01300000921826141299672233506.jpg&refer=http%3A%2F%2Fa4.att.hudong.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1614321463&t=7afbdf3ad0cfbcda0cfbd313c957eb63"  class="img-rounded" style="height:324px;width:576px">
<div class="caption">
 <h3>标题：{{$article->title}}</h3>
<p>内容:{{$article->content}}</p>
</div>
</div>

</div>
</div>
</div>


@endsection
