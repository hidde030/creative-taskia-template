@extends('layouts.index')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1>Task management and lists Tool</h1>
                    <p>We believe that designing products and services in close
                        partnership with our clients is the only way to have a real
                        impact on their business.</p>
                    <form>
                        <input type="text" placeholder="Name@company.com">
                        <input type="submit" class="button" value="Try it free">
                    </form>
                </div>
                <div class="col-5 column">
                    <div class="image"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="tasks">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Featured Service that We Provide</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6 column">
                    <div class="task-card">
                        <img src="{{url('/img/tea.png')}}" alt="tea">
                        <h4 class="task-card__title">Keep tasks in one place</h4>
                        <p class="task-card__description">Save time, avoid losing work and information, delegate, and
                            track tasks to stay on schedule</p>
                    </div>
                </div>
                <div class="col-md-4 col-6 column">
                    <div class="task-card">
                        <img src="{{url('/img/wallet.png')}}" alt="wallet">
                        <h4 class="task-card__title">Keep tasks in one place</h4>
                        <p class="task-card__description">Save time, avoid losing work and information, delegate, and
                            track tasks to stay on schedule</p>
                    </div>
                </div>
                <div class="col-md-4 col-6 column">
                    <div class="task-card">
                        <img src="{{url('/img/pocket-knief.png')}}" alt="knief">
                        <h4 class="task-card__title">Keep tasks in one place</h4>
                        <p class="task-card__description">Save time, avoid losing work and information, delegate, and
                            track tasks to stay on schedule</p>
                    </div>
                </div>


            </div>

        </div>

    </section>
    <section class="info-management">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{url('/img/tablet.png')}}" alt="tablet">
                </div>
                <div class="col-12 col-md-6">
                    <h2>
                        Why do you need
                        task management software?
                    </h2>
                    <p class="description">
                        Do you waste time organizing sticky notes, searching your email and apps for to-dos, and
                        figuring out what to work on first? Then you need one solution to prioritize your tasks, manage
                        your time, and meet your deadlines.
                    </p>
                    <a href="" class="button">Learn more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h2>
                        Seamless Team Workflow & Efficient
                    </h2>
                    <p class="description">Do you waste time organizing sticky notes, searching your email and apps for
                        to-dos, and figuring out what to work on first? Then you need one solution to prioritize your
                        tasks, manage your time, and meet your deadlines.</p>

                    <div class="phone-company">
                        <a href="#"><img src="{{url('/img/apple.png')}}" alt="apple"></a>
                        <a href="#"><img src="{{url('/img/android.png')}}" alt="android"></a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img src="{{url('/img/team.png')}}" alt="team">
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-12"><h2>Trust us and feel free to try our service</h2></div>
                <div class="col-12"><p>100000</p>
                </div>
            </div>

            <img src="{{url('/img/bubble.png')}}" alt="" class="bubble">
            <img src="{{url('/img/bubble.png')}}" alt="" class="bubble">
            <img src="{{url('/img/bubble.png')}}" alt="" class="bubble">
            <img src="{{url('/img/bubble.png')}}" alt="" class="bubble">
            <img src="{{url('/img/bubble.png')}}" alt="" class="bubble">
            <img src="{{url('/img/bubble.png')}}" alt="" class="bubble">
        </div>

    </section>


@endsection
