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
    <!-- Block 1-->
    <section class="wow fadeInDown" data-wow-delay="0.1s">
        @include('components.block1.block1')
    </section>
    <!-- Block 7-->
    <section class="wow fadeInLeft" data-wow-delay="0.8s">
        @include('components.block7.block7')
    </section>
    <!-- Block 13-->
    <section class="wow fadeInDown" data-wow-delay="2s">
        @include('components.block13.block13')
    </section>
    <!-- Block 2-->
    <section class="wow fadeInRight" data-wow-delay=".5s">
        @include('components.blog-post-single-para.index')
    </section>
    <!-- Block 3-->
    <section class="wow fadeInLeft" data-wow-delay=".5s">
        @include('components.blog-post-single.index')
    </section>
    <!-- Block 4-->
    <section class="wow fadeInDown" data-wow-delay=".5s">
        @include('components.service-list-box-circle.index')
    </section>
    <!-- Block 5-->
    <section class="wow fadeInUp" data-wow-delay=".5s">
        @include('components.service-box-rectangle.index')
    </section>

    <!-- Block 6 -->
    <section class="wow fadeInLeft" data-wow-delay=".5s">
        @include('components.service-box-list-rectangle.index')
    </section>

    <!-- Block 8-->
    <section class="wow fadeInRight" data-wow-delay=".5s">
        @include('components.blog-post-two.index')
    </section>

    <!-- Block 9-->
    <section class="wow fadeInDown" data-wow-delay=".5s">
        @include('components.blog-post-three.index')
    </section>

    <!-- Block 10-->
    <section class="wow fadeInUp" data-wow-delay=".5s">
        @include('components.blog-post-circle.index')
    </section>

    <!-- Block 11-->
    <section class="wow fadeInRight" data-wow-delay=".5s">
        @include('components.blog-post-rectangle-list.index')
    </section>

    <!-- Block 12-->
    <section class="wow fadeInLeft" data-wow-delay=".5s">
        @include('components.blog-post-fullwidth.index')
    </section>


    <!-- Block 14-->
    <section class="wow fadeInDown" data-wow-delay=".5s">
        @include('components.service-unorder-list.index')
    </section>

    <!-- Block 15-->
   <section class="wow fadeInUp" data-wow-delay=".5s">
        @include('components.blog-post-circle-list.index')
    </section>

    <!-- Block 16-->
    <section class="wow fadeInLeft" data-wow-delay=".5s">
        @include('components.blog-post-row.index')
    </section>

    <!-- Block 17-->
    <section class="wow fadeInRight" data-wow-delay=".5s">
        @include('components.footer.index')
    </section>

    <script src="{{ asset('blog/assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('blog/assets/js/wow.js')}}"></script>
    <script src="{{ asset('blog/assets/js/main.js')}}"></script>

  </body>
</html>
