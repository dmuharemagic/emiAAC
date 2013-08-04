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