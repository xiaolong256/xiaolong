@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
   <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>话题</th>
                         <th style="width:80px" >发布人</th>
                         <th>内容</th>
                         <th>创建时间</th>
                         <th>更新时间</th>
                     </tr>
                 </thead>
                 <tbody>
                 @foreach($article as $articles)
                 <tr>
                     <td><a href="{{route('detail',['id'=>$articles->id])}}">{{ $articles->title  }}</a></td> 
                     <td> {{$articles->admin->name}}</td>
                     <td>{{ $articles->content  }}</td>
                     <td>{{ $articles->created_at  }}</td>
                     <td>{{ $articles->updated_at  }}</td>
                 </tr>
                 @endforeach
                 </tbody>
             </table>  
                {{ $article->links() }}
            </div>
        </div>
    </div>
@endsection
