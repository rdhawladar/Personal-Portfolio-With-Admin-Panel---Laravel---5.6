<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative CV is a HTML resume tempRlate for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <title>Md. Riadul Islam</title>
    <link href="{{asset('css/googleapis.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/aos.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

  </head>
  <body id="top">
    @include('header')    
    <div class="page-content">
      <div>
        @include('profile-page')
        @include('about')
        @include('skills/skill')
        @include('portfolio/portfolio')
        @include('experience')
        @include('reference')
        @include('contact')
      </div>
    </div>
    @include('footer')
    <script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/now-ui-kit.js?v=1.1.0')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/scripts/main.js')}}"></script>
  </body>
</html>