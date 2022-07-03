<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.joomlastars.co.in/silla/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 03:34:07 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Belive Store | Multi-Printing Function Shop</title>
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('website/images/favicon.ico') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('website/js/bootstrap/bootstrap.min.css') }}">

<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

<!-- Template's stylesheets -->
<link rel="stylesheet" href="{{ asset('website/js/megamenu/stylesheets/screen.css') }}">
<link rel="stylesheet" href="{{ asset('website/css/theme-default.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/js/loaders/stylesheets/screen.css') }}">
<link rel="stylesheet" href="{{ asset('website/css/corporate.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/shortcodes.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('website/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
<link rel="stylesheet" href="{{ asset('website/fonts/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('website/js/revolution-slider/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('website/js/revolution-slider/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('website/js/revolution-slider/css/navigation.css') }}">
<link rel="stylesheet" href="{{ asset('website/js/parallax/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('website/js/cubeportfolio/cubeportfolio.min.css') }}">
<link href="{{ asset('website/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('website/js/owl-carousel/owl.theme.css') }}" rel="stylesheet">
<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Style Customizer's stylesheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('website/js/style-customizer/css/spectrum.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('website/js/style-customizer/css/style-customizer.css') }}">
<link rel="stylesheet/less" type="text/css" href="{{ asset('website/less/skin.html') }}">
<!-- Style Customizer's stylesheets END -->

<!-- Skin stylesheet -->

</head>

<body>
<div class="over-loader loader-live">
  <div class="loader">
    <div class="loader-item style4">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div>
</div>
<!--end loading--> 

<!-- Style Customizer -->
<section id="style-customizer">
  <div class="style-customizer-wrap form-horizontal">
    <h4 class="sc-header uppercase">Style Customizer</h4>
    <h5 class="uppercase">Layout Style</h5>
    <div class="sc-variable-row form-group">
      <div class="radio-group col-xs-12">
        <input type="radio" name="sc-layout-type" id="sc-layout-type-boxed" class="sc-variable" data-key="layoutType" value="boxed" checked>
        <input type="radio" name="sc-layout-type" id="sc-layout-type-wide" class="sc-variable" data-key="layoutType" value="wide">
        <label for="sc-layout-type-wide" class="style-fweight-normal">Wide</label>
        <label for="sc-layout-type-boxed" class="style-fweight-normal">Boxed</label>
      </div>
    </div>
    <fieldset id="outer-bg-section">
      <h5 class="customizer-style-tytle-padd">Outer Background Styles</h5>
      <div class="sc-variable-row form-group">
        <div class="col-xs-12">
          <select name="sc-bg-outer-type" id="sc-bg-outer-type" data-key="outerBgType" class="sc-variable col-xs-8">
            <option value="color" selected>Solid color</option>
            <option value="pattern">Pattern</option>
            <option value="image">Image</option>
          </select>
          <div class="col-xs-4">
            <div id="sc-bg-outer-color-wrap">
              <input type="color" name="sc-bg-outer-color" id="sc-bg-outer-color" class="sc-variable" data-key="outerBgColor">
            </div>
            <div id="sc-bg-outer-image-wrap">
              <input type="file" accept="image/*" name="sc-bg-outer-image" id="sc-bg-outer-image" class="sc-variable sr-only" data-key="outerBgImage">
              <label for="sc-bg-outer-image" class="sc-btn" title="Upload image"><i class="fa fa-upload"></i> </label>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <h5 class="customizer-style-tytle-padd">Color Options</h5>
    <div class="sc-variable-row form-group style-form-group">
      <label for="sc-color-prim" class="col-xs-8 control-label color-text">Primary Color</label>
      <div class="col-xs-4">
        <input type="color" id="sc-color-prim" class="sc-variable" data-key="colorPrimary">
      </div>
    </div>
    <br/>
    <div class="form-group">
      <div class="col-xs-12">
        <button class="sc-btn" id="sc-download-css"><i class="fa fa-download"></i> Get CSS file</button>
      </div>
    </div>
    <br/>
    <br/>
    
  </div>
  <button id="sc-toggle" title="Styles Customizer"><i class="fa fa-wrench"></i> </button>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="afterSaveCSSFileModal" aria-labelledby="afterSaveCSSFileModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="afterSaveCSSFileModalLabel">File saved</h4>
      </div>
      <div class="modal-body"> In order to apply the generated custom styles to your template, please follow these steps:
        <ol>
          <li class="sc-after-save-todo-point-file">Upload the "skin.css" file to "css" directory in your template</li>
          <li class="sc-after-save-todo-point-image">Upload the image file to "img" directory in your template. Keep the image file name unchanged.</li>
          <li class="sc-after-save-todo-point-stylesheet-code"> Copy this code and paste it into "index.html" file in your template, after the line marked as <code>&lt;!-- Skin stylesheet --&gt;</code>
            <pre><code>&lt;link rel="stylesheet" href="css/skin.css"&gt;</code></pre>
          </li>
          <li class="sc-after-save-todo-point-preloader"> Copy this code and paste it into "index.html" file in your template, after the line marked as <code>&lt;!-- Preloader icon --&gt;</code>
            <pre><code class="sc-preloader-html"></code></pre>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Style customizer END -->

<div class="wrapper-boxed">
  <div class="site-wrapper">
    {{-- start header --}}
    @include('layouts.partials.web_header')
    <!--end menu-->
    <div class="clearfix"></div>
    
    @yield('web-content')
    
    {{-- Footer Start --}}
    @include('layouts.partials.web_footer')

  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 

<!-- Scripts --> 
<script src="{{ asset('website/js/jquery/jquery.js') }}"></script> 
<script src="{{ asset('website/js/bootstrap/bootstrap.min.js') }}"></script> 
<script src="{{ asset('website/js/style-customizer/js/spectrum.js') }}"></script> 
<script src="{{ asset('website/js/less/less.min.js') }}" data-env="development"></script>
<script src="{{ asset('website/js/style-customizer/js/style-customizer.js') }}"></script> 
<!-- Scripts END --> 

<!-- Template scripts --> 
<script src="{{ asset('website/js/megamenu/js/main.js') }}"></script> 


<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script> 
<script src="{{ asset('website/js/parallax/parallax-background.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('website/js/cubeportfolio/main.js') }}"></script> 
<script src="{{ asset('website/js/owl-carousel/owl.carousel.js') }}"></script> 
<script src="{{ asset('website/js/owl-carousel/custom.js') }}"></script> 
<script src="{{ asset('website/js/functions/functions.js') }}"></script>
</body>

</html>
