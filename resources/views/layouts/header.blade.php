
<nav class="navbar navbar-expand-sm tbar shadow border-bottom border-secondary">
    <a class="navbar-brand" href="/">
        <h3 class="whitetext navbar-brand">OLD&NEW eSHOP</h3>
    </a>
    <form class="form-inline">
        <input class="form-control pr-5 mr-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <button class="btn ml-auto whitetext" type="submit">Autenticación</button>
    <a href="{{route('cart.show')}}">
        <button class="btn btn-light" type="submit">
            <img src="/ico/cesta.png" alt="" width="30">
        </button>
    </a>
    <h4 class="ml-3">
    @php
        $cart = session()->get('cart', NULL);
        if ($cart != NULL)
            echo($cart->iTotalItems)
    @endphp
    </h4>
</nav>
