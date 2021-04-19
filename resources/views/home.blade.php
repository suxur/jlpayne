<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120466191-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-120466191-1');
    </script>

    <title>{{ $user->name }} | {{ $user->profile->title }}</title>
    <script src="https://use.fontawesome.com/1f5d73d6af.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
</head>
<body>

<!--Header-->
<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <div class="columns">

                <!--Photo-->
                <div class="column is-hidden-mobile is-2-desktop is-3-tablet">
                    <img class="image is-profile" src="img/me-whm-thumbnail.jpg" alt="{{ $user->name }}">
                </div>

                <!--Info-->
                <div class="column is-4-desktop is-5-tablet">
                    <h1 class="title is-1 has-text-centered">{{ $user->name }}</h1>
                    <h2 class="subtitle has-text-centered">&#8211; {{ $user->profile->title }} &#8211;</h2>
                    <ul class="social has-text-centered">
                        @foreach($links as $link)
                            <li>
                                <a href="{{ $link->url }}" target="_blank">
                                    <i class="fa {{ $link->icon }}"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="has-text-centered">
                        <a class="resume button is-primary is-rounded has-text-centered" href="{{ route('print') }}">
                        <span class="icon">
                            <i class="fa fa-print"></i>
                        </span>
                            &nbsp; Resume
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Content-->
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">

                <!--About-->
                <div class="box">
                    <p class="title">About</p>
                    <div class="content">
                        {!! $profile->bio !!}
                    </div>
                </div>

                <!--Work Experience-->
                <div class="box">
                    <p class="title spread">Work Experience <span class="is-size-5 has-text-weight-light">{{ $experience_total }}</span></p>
                    @each('partials.experience', $experiences, 'experience')
                </div>

            </div>
            <div class="column is-4">

                <!--Education-->
                <div class="box">
                    <p class="title">Education</p>
                    @foreach($education as $e)
                        <p><strong>{{ $e->degree }}</strong></p>
                        <p>{{ $e->school }} &#124; {{ $e->to }}</p>
                        <hr>
                    @endforeach
                </div>

                <!--Skills-->
                <div class="box">
                    <p class="title">Skills</p>
                    <div class="content">
                        @foreach($skills as $skill)
                            <table class="table is-narrow is-hoverable is-striped">
                                <thead>
                                <tr>
                                    <th>{{ $skill->name }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($skill->children as $child)
                                    <tr>
                                        <td>{{ $child->name }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                copyright &copy; {{ date('Y') }}
            </p>
            <p>
                @foreach($links as $link)
                    <a class="icon" href="{{ $link->url }}" target="_blank">
                        <i class="fa {{ $link->icon }}"></i>
                    </a>
                @endforeach
            </p>
        </div>
    </div>
</footer>
</body>
</html>
