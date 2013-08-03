                                        @if ( Auth::guest() )
                    
                    <li style="float: right;padding-right: 0">
                      <ul class="nav">
                        <li>
                          <a href="{{ URL::to('register') }}">
                            <i class="icon-black icon-plus">
                            </i>
                            
                            <strong>
                              Register
                            </strong>
                          </a>
                        </li>
                        <li>
                          <a href="{{ URL::to('login') }}">
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
                          
                          <a href="{{ URL::to('account/managment') }}">
                            <i class="icon-user">
                            </i>
                            Account Managment  
                          </a>
                          
                        </li>
                        <li>
                          
                          <a href="{{ URL::to('account/managment/change_credentials') }}">
                            <i class="icon-lock">
                            </i>
                            Change Password
                          </a>
                          
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                          
                          <a href="{{ URL::to('account/logout') }}">
                            <i class="icon-off">
                            </i>
                            Log out
                          </a>
                          
                        </li>
                        
                      </ul>
                    </div>
                    
                    @endif