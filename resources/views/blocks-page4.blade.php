<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Block Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('blog/assets/css/animate.css')}}">
  </head>
  <body>

    <a href="{{ url('/')}}">Page 1</a>
    <a href="{{ route('blocks-secound')}}">Page 2</a>
    <a href="{{ route('blocks-three')}}">Page 3</a>
    <a href="{{ route('blocks-four')}}">Page 3</a>

    <!-- Block 4 -->
    <section class="wow fadeInDown" data-wow-delay=".5s">
        @include('components.service-list-box-circle.index')
    </section>
    <!-- Block 5 -->
    <section class="wow fadeInUp" data-wow-delay=".5s">
        @include('components.service-box-rectangle.index')
    </section>
    <!-- Block 6 -->
    <section class="wow fadeInLeft" data-wow-delay=".5s">
        @include('components.service-box-list-rectangle.index')
    </section>

    <script src="{{ asset('blog/assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('blog/assets/js/wow.js')}}"></script>
    <script src="{{ asset('blog/assets/js/main.js')}}"></script>

  </body>
</html>
