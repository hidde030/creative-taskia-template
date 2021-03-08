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



@endsection
