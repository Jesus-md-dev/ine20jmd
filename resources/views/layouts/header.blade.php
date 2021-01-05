<nav class="navbar navbar-expand-sm tbar shadow border-bottom border-secondary">
    <a class="navbar-brand" href="/">
        <h3 class="whitetext navbar-brand">OLD&NEW eSHOP</h3>
    </a>
    <form class="form-inline">
        <input class="form-control pr-5 mr-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    @if (Auth::check())
    <a href="{{ route('user.edit') }}" class="btn ml-auto whitetext mr-2" type="submit">{{Auth::user()->name}}</a>
    @else
    <a href="{{ route('login') }}" class="btn ml-auto whitetext mr-2" type="submit">Autenticación</a>
    @endif
    <a href="{{route('cart.show')}}">
        <button class="btn btn-light" type="submit">
            <img src="/ico/cesta.png" alt="" width="30">
        </button>
    </a>
    <h4 class="ml-3">
        @php
        $cart = session()->get('cart', NULL);
        if ($cart != NULL && $cart->iTotalItems < 0)
        echo($cart->iTotalItems)
        @endphp
    </h4>
</nav>