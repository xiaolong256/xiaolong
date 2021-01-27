<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章修改</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">文章修改</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.edit',$article->id ) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">标题:</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" value="{{ $article->title  }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" required>
                                </div>
                                </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">内容:</label>
                                <div class="col-md-6">
                                       <textarea cols="35" rows="5"  name="content">{{ $article->content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                      修改
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
