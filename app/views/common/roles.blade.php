 @if (Auth::check())
                    @if ($roles == 5)

                     <li style="float: right;padding-right: 0">
                      <ul class="nav">
                        <li>
                          <a href="{{ URL::to('admin/dash') }}">
                            <i class="icon-key">
                            </i>
                            
                            <strong>
                              Admin Dashboard
                            </strong>
                          </a>
                        </li>
                        <li>
                        </ul>

                        @endif
                        @endif
