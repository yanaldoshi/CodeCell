
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>
            CodeCell
        </title>
<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.navbar')

        <div class ="container">

          @if(Request::is('/'))
              @include('inc.showcase')
              @endif
        <div class="row">
          <div class ="col-md-8 col-lg-8">
            @if(count($errors)>0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}
            </div>
            @endforeach
            @endif
          @yield('content')
        </div>
        <div class ="col-md-8 col-lg-4">
        @include('inc.sidebar')
      </div>
    </div>
</div>
<footer id="footer" class ="text-center">
  <p>copywrite 2017&copy;</p>
</footer>
    </body>
    </html>
