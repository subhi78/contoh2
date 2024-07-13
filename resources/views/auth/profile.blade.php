<h1> Welcome, {{ Auth::user()->name }}</h1>#
<form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Logout</button>
</form>