<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en">
<![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en">
<![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<!-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <!--
<![endif]-->
                  
<!--//This code sucks, you know it and I know it.  
   //Move on and call me an idiot later. -->
  
                  <head>
                    
                    <meta charset="utf-8">
                    <title>emiAAC - @yield('title')</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta name="description" content="Automatic Account Creator (built with Laravel 4 and Bootstrap)">
                    <meta name="author" content="Zysen">
                    
                    
                    {{ HTML::style('css/bootstrap.min.css') }}
                    {{ HTML::style('css/screen.css') }}
                    {{ HTML::style('css/prettify.css') }}
                    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css') }}
                    
                    
                    <style type="text/css"> 
                      <!--
                      
                      .footer-post {
                      
                      bottom: -5px;
                      right: -178px;
                      position: relative
                    }
                      
                      .center-1 {
                      
                      bottom: -5px;
                      right: -129px;
                      position: relative
                    }
                      
                      .doc-content-box{
                      position:relative;
                      min-height: 1px;
                      margin-bottom: 20px;
                      padding: 20px;
                      background: #F9F9F9;
                      border: 1px solid #DDDDDD;
                      border-radius: 1px;
                    }
                      .doc-content-box > ul > li{
                      list-style-type: none;
                    }

                    .table-striped tbody>tr:nth-child(odd)>td, .table-striped tbody>tr:nth-child(odd)>th 
                    {
                      background-color:#fff
                    }

                    .dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-submenu:hover>a,.dropdown-submenu:focus>a{text-decoration:none;color:#ffffff;background-color:#0081c2;background-image:-moz-linear-gradient(top, #0088cc, #0077b3);background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));background-image:-webkit-linear-gradient(top, #0088cc, #0077b3);background-image:-o-linear-gradient(top, #0088cc, #0077b3);background-image:linear-gradient(to bottom, #0088cc, #0077b3);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);}

                      
                    </style>
                    
                    
                    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->


                  </head>
                  
                  <body data-spy="scroll" data-target="#scrollspy" data-offset="45">
                    <header class="main-header subhead" id="overview">
                      <div class="container">
                        <h1>emiAAC</h1>
                        
                        <p class="lead">
                          <strong>Automatic Account Creator (built with Laravel 4 and Bootstrap)</strong>
                        </p>
                      </div>
                      
                      <a href="https://github.com/noizwaves/bootstrap-social-buttons">
                        <img style="position: absolute; top: 0; left: 0; border: 0;" src="http://www.teedubbleyoo.co.uk/img/img/beta-ribbon.png" alt="Fork me on GitHub">
                      </a>
                      
                  </header>
                  <div class="actions-bar" data-spy="affix" data-offset-top="230">
                    <div class="container">
                      <ul class="actions-bar-buttons clearfix">
                        <li style="padding-left: 0">
                          <ul class="nav" style="padding-left: 0">
                            <li>
                              <a href="{{ URL::to('news/index') }}">
                                <i class="icon-home icon-black">
                                </i>
                                Home
                              </a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-black icon-globe">
                                </i>
                                Community 
                                <b class="caret">
                                </b>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="disabled">
                                  <a href="#">
                                    Forum
                                  </a>
                                </li>
                                <li class="disabled">
                                  <a href="#">
                                    Live Casts
                                  </a>
                                </li>
                                 <li>
                              <a href="{{ URL::to('community/online') }}">
                                Online list
                              </a>
                            </li>
                                <li class="disabled">
                                  <a href="#">
                                    Characters
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ URL::to('community/highscores') }}">
                                    Highscores
                                  </a>
                                </li>
                                <li class="disabled">
                                  <a href="#">
                                    Support
                                  </a>
                                </li>
                                <li class="disabled">
                                  <a href="#">
                                    Houses
                                  </a>
                                </li>
                                <li class="disabled">
                                  <a href="#">
                                  </i>
                                  Gallery
                                </a>
                            </li>
                            <li class="disabled">
                              <a href="#">
                                Guilds
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="#">
                                Guild Wars
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-book icon-black">
                            </i>
                            Library 
                            <b class="caret">
                            </b>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="disabled">
                              <a href="#">
                                Rules
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="#">
                                Exp. stages
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="#">
                                Monsters
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="#">
                                Quests
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="#">
                                Spells
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="#">
                            <i class="icon-gift icon-black">
                            </i>
                            Shop
                          </a>
                        </li>
                      </ul>
                    </li>
                    

                    @include('common.menu_addition')
                    @include('common.roles')



                  </ul>
</div>
</div>


<div class="container">
  <div class="row">

    <div id="spaceholder">&nbsp;</div>
    <div id="spaceholder">&nbsp;</div>
    <div id="spaceholder">&nbsp;</div>
    
    <div class="page-header">      
      
      @if ($message = Session::get('success'))

      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Success!</strong>
        <div id="spaceholder">&nbsp;</div>
        {{{ $message }}}
      </div>

      @endif
      
      @if ($message = Session::get('succ'))

      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Proceed.</strong>
        <div id="spaceholder">&nbsp;</div>
        {{{ $message }}}
      </div>

      @endif    

            @if ($message = Session::get('danger'))

      <div class="alert alert-success alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Failure!</strong>
        <div id="spaceholder">&nbsp;</div>
        {{{ $message }}}
      </div>

      @endif          
      
      <div class="alert alert-info"><span class="label label-info">12 Jul 2013 03:59</span>
        <span class="label label-success">Update</span>
        
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <td>Patch <strong>1.67b</strong> has been released. More information <a href="#"><strong>here.</strong></a></td>
      </div>
      
    </div>
    
    @yield('main')
    
    <div id="spaceholder">&nbsp;</div>
    <div id="spaceholder">&nbsp;</div>
    <div id="spaceholder">&nbsp;</div>

    
    <footer>
      <div class="container">
        <div class="footer-post">
          <p>Designed and built by <a href='http://otland.net/members/zysen/'><strong>Zysen</a></strong> | Built with <a href="http://laravel.com" target="_blank" title="Laravel 4 - PHP Framework">Laravel 4<alt="Laravel 4 - PHP Framework"></a></p>
            <p><div class="center-1"><a href="#">Back to top <i class="icon-level-up"></i></a></div></p>
        <p><small><?php
$time_start = microtime(true);

// Sleep for a while
usleep(100);

$time_end = microtime(true);
$time     = $time_end - $time_start;

echo "Page generated in $time seconds.\n";
?> </small>
                                  </p>
                              </div>
                              
                          </footer>
                      </div>
                      <div id="spaceholder">&nbsp;</div>
                      <div id="spaceholder">&nbsp;</div>
                      <div id="spaceholder">&nbsp;</div>
                      
                        <!-- Le javascript -->
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    {{ HTML::script('http://code.jquery.com/jquery-2.0.3.min.js') }}
    {{ HTML::script('http://twbs.github.io/bootstrap/2.3.2/assets/js/jquery.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-transition.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-alert.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-modal.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-dropdown.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-scrollspy.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-tab.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-tooltip.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-popover.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-button.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-collapse.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-carousel.js') }}
    {{ HTML::script('https://raw.github.com/twbs/bootstrap/master/js/bootstrap-typeahead.js') }}


</body>

</html>