@section('header')
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12 ">

                    <!-- Logo -->
                    <a class="header__logo" href="/">
                        <img src="{{url('/img/Taskia.png')}}" alt="logo">
                    </a>

                    <!-- Header navicon -->
                    <div class="header__navicon">
                        <span>Menu</span>
                        <div class="hamburger">
                            <span class="hamburger__line"></span>
                            <span class="hamburger__line"></span>
                            <span class="hamburger__line"></span>
                        </div>
                    </div>

                    <!-- Main navigation -->
                    <nav class="header__navigation">
                        <!-- Go back -->
                        <div class="header__navigation__back">Terug</div>
                        <ul class="navigation">
                            <li class="navigation__li {{ Request::is('/') ? 'is-active' : '' }}">
{{--                                <a class="navigation__link " href="">Try Free</a>--}}
                                <a class="button--open button" href="">Try Free</a>
                            </li>

                        </ul>

                    </nav>


                </div>
            </div>
        </div>
    </header>
@show
