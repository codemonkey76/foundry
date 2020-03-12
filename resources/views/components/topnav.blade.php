<div class="nav-container">
    <a id="top"></a>
    <nav {{ $attributes }}>
        <div class="nav-bar">
            <div class="module left">
                <a href="/">
                    <img class="logo logo-light" alt="Foundry" src="img/logo-light.png" />
                    <img class="logo logo-dark" alt="Foundry" src="img/logo-dark.png" />
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
                <div class="module left">
                    <x-megamenu />
                </div>
                <!--end of menu module-->
                <x-searchmenu />
                <x-shoppingcart />
                <x-languagemenu />
            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>
