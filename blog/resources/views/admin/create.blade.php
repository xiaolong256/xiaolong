<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章添加</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">文章添加</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.store',['id'=>1])}}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">添加标题:</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="col-md-10"  name="title" required>
                                    
                                     </div>
                                </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">内容:</label>
                                <div class="col-md-6">
                                       <textarea cols="32" rows="5"  name="content"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                      创建话题
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



