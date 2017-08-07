    @if(Session::has('deleted_user'))
       <div class="alert alert-success">
            {{ session('deleted_user') }}
       </div> 
    @endif

     @if(Session::has('user_created'))
       <div class="alert alert-success">
            {{ session('user_created') }}
       </div> 
    @endif
