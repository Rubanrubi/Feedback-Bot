<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/topbar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 11:13:04 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-bs4/dataTables.bootstrap4.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.min.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/examples/css/tables/datatable.min599c.css?v4.0.2')}}">

  <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/css/bootstrap.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/css/bootstrap-extend.min.css?v4.0.2">
  <link rel="stylesheet" href="{{ asset('assets/css/site.min599c.css?v4.0.2')}}">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/css/skintools.min.css?v4.0.2">
  <script src="{{ asset('assets/js/Plugin/skintools.min599c.js?v4.0.2')}}"></script>
  
    <!-- Plugins -->'
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/animsition/animsition.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/asscrollable/asScrollable.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/switchery/switchery.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/intro-js/introjs.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/slidepanel/slidePanel.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/flag-icon-css/flag-icon.min.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/chartist/chartist.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/aspieprogress/asPieProgress.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/jquery-selective/jquery-selective.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.css?v4.0.2">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/asscrollable/asScrollable.min.css?v4.0.2">



  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/examples/css/dashboard/team.min599c.css?v4.0.2')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/web-icons/web-icons.min.css?v4.0.2')}}">
  <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/fonts/brand-icons/brand-icons.min.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">


  <!--[if lt IE 9]>
    <script src="../global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="../global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="https://getbootstrapadmin.com/remark/global/vendor/breakpoints/breakpoints.min.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<style type="text/css">
    .site-menu-title {
    display: inline-block;
    max-width: 208px;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    white-space: nowrap;
}
  </style>
<body class="animsition site-navbar-small dashboard">

  @include('includes.user_navbar')

   @yield('content')
 
   @include('includes.user_footer')

    <!-- Core  -->
  <script data-cfasync="false" src="https://getbootstrapadmin.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://getbootstrapadmin.com/remark/global/vendor/babel-external-helpers/babel-external-helpers.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/jquery/jquery.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/popper-js/umd/popper.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/bootstrap/bootstrap.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/animsition/animsition.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/mousewheel/jquery.mousewheel.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/asscrollbar/jquery-asScrollbar.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/asscrollable/jquery-asScrollable.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js?v4.0.2"></script>

  <!-- Plugins -->
  <script src="https://getbootstrapadmin.com/remark/global/vendor/switchery/switchery.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/intro-js/intro.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/screenfull/screenfull.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/slidepanel/jquery-slidePanel.min.js?v4.0.2"></script>

  <!-- Plugins For This Page -->
  <script src="https://getbootstrapadmin.com/remark/global/vendor/chartist/chartist.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/aspieprogress/jquery-asPieProgress.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/matchheight/jquery.matchHeight-min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/jquery-selective/jquery-selective.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js?v4.0.2"></script>

  <!-- Scripts -->
  <script src="https://getbootstrapadmin.com/remark/global/js/Component.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Base.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Config.min.js?v4.0.2"></script>

  <script src="{{ asset('assets/js/Section/Menubar.min599c.js?v4.0.2')}}"></script>
  <script src="{{ asset('assets/js/Section/Sidebar.min599c.js?v4.0.2')}}"></script>
  <script src="{{ asset('assets/js/Section/PageAside.min599c.js?v4.0.2')}}"></script>
  <script src="{{ asset('assets/js/Plugin/menu.min599c.js?v4.0.2')}}"></script>

  <!-- Config -->
  <script src="https://getbootstrapadmin.com/remark/global/js/config/colors.min.js?v4.0.2"></script>
  <script src="{{ asset('assets/js/config/tour.min599c.js?v4.0.2')}}"></script>
  <script>
    Config.set('assets', 'assets');
  </script>

  <!-- Page -->
  <script src="{{ asset('assets/js/Site.min599c.js?v4.0.2')}}"></script>
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/asscrollable.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/slidepanel.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/switchery.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/matchheight.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/aspieprogress.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/bootstrap-datepicker.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/asscrollable.min.js?v4.0.2"></script>


  <script src="{{ asset('assets/examples/js/dashboard/team.min599c.js?v4.0.2')}}"></script>

  <!-- Plugins For This Page -->
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net/jquery.dataTables.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-scroller/dataTables.scroller.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-responsive/dataTables.responsive.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-buttons/dataTables.buttons.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-buttons/buttons.html5.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-buttons/buttons.flash.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-buttons/buttons.print.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-buttons/buttons.colVis.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/asrange/jquery-asRange.min.js?v4.0.2"></script>
  <script src="https://getbootstrapadmin.com/remark/global/vendor/bootbox/bootbox.min.js?v4.0.2"></script>

  <script src="https://getbootstrapadmin.com/remark/global/js/Plugin/datatables.min.js?v4.0.2"></script>


  <script src="{{ asset('assets/examples/js/tables/datatable.min599c.js?v4.0.2')}}"></script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'http://www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');

    // let close_sidebar=1;
    function open_sidebar()
    {
      //$(".slidePanel-show").show();
      $(".slidePanel-show").toggle();
    }
  </script>
  
   </body>


<!-- Mirrored from getbootstrapadmin.com/remark/topbar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 11:16:50 GMT -->
</html>

