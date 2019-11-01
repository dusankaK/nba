<style>
    .navbar a {
        text-decoration: none;
        color: black;
    }
    .navbar a:hover {
        color: grey;
    }
</style>
        
    <div class="navbar d-flex flex-row justify-content-between" style="background-color:antiquewhite;">
        <div class="p-3">
            <a href="/" class="m-0 p-0"><strong>Teams</strong></a>
        </div>
        <div class="p-3">

            @if (Auth::check())
                <a href="#" style="margin-left:10px;">{{auth()->user()->name}}</a>
                <a href="/logout" style="margin-left:10px;">Logout</a>
            @else
                <a href="/login" style="margin-left:10px;">Login</a>
                <a href="/register" style="margin-left:10px;">Register</a>
            @endif
        </div>
    </div> 