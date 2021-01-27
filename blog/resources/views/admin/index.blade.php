<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>blog后台首页</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
 <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="margin-bottom:10px">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                               @if(session('admin')) 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{session('admin')->name}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}">退出登录
                                    </a>
                                </div>
                            </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
   <div class="btn btn-success" style="margin-bottom:10px"><a style="text-decoration: none;color:#ffffff" href="{{ route('admin.create')}}">添加话题</a></div> 
   @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

   <table class="table table-striped">
                 <thead>
                     </tr>
                         <th>话题</th>
                         <th>内容</th>
                         <th>创建时间</th>
                         <th>更新时间</th>
                         <th class="text-center" colspan='2'>操作</th>
                     </tr>
                 </thead>
                 <tbody>   
                 @foreach($articles as $article)
                 <tr>
                     <td>{{ $article->title  }}</td>
                     <td>{{ $article->content  }}</td>
                     <td>{{ $article->created_at  }}</td>
                     <td>{{ $article->updated_at  }}</td>
                     <td><a  href="{{ route('admin.update',['id'=> $article->id])  }}">修改</a></td>
                     <td><a  href="{{ route('admin.delete',['id'=> $article->id]) }}">删除</a></td>
                 </tr>
                 @endforeach
                 </tbody>
             </table>
                  {{ $articles->links() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
