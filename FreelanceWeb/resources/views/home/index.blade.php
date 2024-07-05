<h1>index</h1>
<!-- Log out               -->
<div class="list-inline-item logout">
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <input type="submit" value="Logout" class="btn btn-primary">
    </form>
  </div>
