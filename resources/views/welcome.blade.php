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
    <section class="wow fadeInDown" data-wow-delay="0.1s">
        @include('components.textblock.textblock')
    </section>

    <section class="wow fadeInLeft" data-wow-delay="0.8s">
        @include('components.servicelist.servicelist')
    </section>

    <section class="wow fadeInDown" data-wow-delay="2s">
        @include('components.demo13.demo13')
    </section>
    <script src="{{ asset('blog/assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('blog/assets/js/wow.js')}}"></script>
    <script src="{{ asset('blog/assets/js/main.js')}}"></script>

  </body>
</html>
