<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'unknown page')</title>

    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Gnome-home.svg/1024px-Gnome-home.svg.png" type="image/gif" sizes="25x20">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

<!-- Navigation -->
@include('includes.home_nav')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->


        <div class="col-md-8">
 @if ($posts = \App\Post::paginate(2))
@foreach($posts as $post)

            <!-- First Blog Post -->
            <h2>
                <a href="#">{{$post->title}}</a>
            </h2>
            <p class="lead">
                by <a href="index.php">{{$post->user->name}}</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->updated_at->diffForHumans()}}</p>
            <hr>
            <img class="img-responsive" src="{{asset('images/' . $post->photo->file)}}" alt="{{$post->title}}">
            <hr>
            <p>{!!$post->body!!}</p>
                <hr>

                <div id="disqus_thread">
                        <script>


                            var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://codehacking-iwhvmsnt9j.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        <script id="dsq-count-scr" src="//codehacking-iwhvmsnt9j.disqus.com/count.js" async></script>
                </div>
                <hr>

@endforeach
@endif


            <!-- Pagination -->


        </div>

        <!-- Blog Sidebar Widgets Column -->
        @include('includes.home_sidebar')

    </div>
    <div class="row">
        <div class="col-sm-offset-5 col-sm-6">
            {{$posts->render()}}
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
