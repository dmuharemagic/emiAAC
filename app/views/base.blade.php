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
                              <a href="index">
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
                                  <a href="forum">
                                    Forum
                                  </a>
                                </li>
                                <li>
                                  <a href="casts">
                                    Live Casts
                                  </a>
                                </li>
                                <li>
                                  <a href="character">
                                    Characters
                                  </a>
                                </li>
                                <li>
                                  <a href="highscores">
                                    Highscores
                                  </a>
                                </li>
                                <li>
                                  <a href="support">
                                    Support
                                  </a>
                                </li>
                                <li class="disabled">
                                  <a href="houses">
                                    Houses
                                  </a>
                                </li>
                                <li class="disabled">
                                  <a href="gallery">
                                  </i>
                                  Gallery
                                </a>
                            </li>
                            <li class="disabled">
                              <a href="guilds">
                                Guilds
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="guildwars">
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
                            <li>
                              <a href="rules">
                                Rules
                              </a>
                            </li>
                            <li>
                              <a href="expstages">
                                Exp. stages
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="monsters">
                                Monsters
                              </a>
                            </li>
                            <li>
                              <a href="quests">
                                Quests
                              </a>
                            </li>
                            <li class="disabled">
                              <a href="spells">
                                Spells
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="shop">
                            <i class="icon-gift icon-black">
                            </i>
                            Shop
                          </a>
                        </li>
                      </ul>
                    </li>
                    
                    @if ( Auth::guest() )
                    
                    <li style="float: right;padding-right: 0">
                      <ul class="nav">
                        <li>
                          <a href="register">
                            <i class="icon-black icon-plus">
                            </i>
                            
                            <strong>
                              Register
                            </strong>
                          </a>
                        </li>
                        <li>
                          <a href="login">
                            <i class="icon-black icon-lock">
                            </i>
                            
                            <strong>
                              Log in
                            </strong>
                          </a>
                        </li>
                      </li>
                    </li>
                  </ul>
                  
                  @else
                  
                  <li class="divider-vertical">
                  </li>
                  <li style="float: right;padding-right: 0">
                    <div class="btn-group">
                      <div class="btn btn-primary">
                        <i class="icon-user">
                        </i>
                        {{ (Auth::user()->name) }}
                      </div>
                      
                      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="icon-caret-down">
                        </span>
                      </a>
                      
                      <ul class="dropdown-menu">
                        <li>
                          
                          <a href="managment">
                            <i class="icon-user">
                            </i>
                            Account Managment  
                          </a>
                          
                        </li>
                        <li>
                          
                          <a href="change_password">
                            <i class="icon-lock">
                            </i>
                            Change Password
                          </a>
                          
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                          
                          <a href="logout">
                            <i class="icon-off">
                            </i>
                            Logout
                          </a>
                          
                        </li>
                        
                      </ul>
                    </div>
                    
                    @endif
                    
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
        <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Proceed </strong>
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
            <p><div class="center-1"><a href="#">Back to top &uarr;</a></div></p>
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

    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js') }}
    {{ HTML::script('http://twitter.github.io/bootstrap/assets/js/jquery.js') }}
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