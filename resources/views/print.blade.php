<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $user->name }}</title>
    <link rel="stylesheet" type="text/css" href="css/print.css">
</head>
<body>

<!--Header-->
<div class="container content">
    <section class="hero is-dark">&nbsp;</section>
    <p class="title is-size-1 has-text-centered">{{ $user->name }}</p>
    <p class="title is-size-5 has-text-centered">{{ $profile->location }} <span class="has-text-grey-lighter">|</span> {{ $profile->number }} <span class="has-text-grey-lighter">|</span> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>

    <!--About-->
    <p class="title is-size-6">Summary</p>
    <hr />
{!! $profile->bio !!}

<!--Experience-->
    <p class="title is-size-6">Experience</p>
    <hr />
    @foreach($experiences as $experience)
        <table>
            <tr>
                <th class="has-text-left">
                    {{ $experience['title'] }}
                </th>
                <th class="has-text-right">
                    {{ $experience['from'] }}
                    &#8211;
                    @if($experience['current'])
                        Current
                    @else
                        {{ $experience['to'] }}
                    @endif
                </th>
            </tr>
        </table>
        <p>
        @if($experience['url'])
                <a href="{{ $experience['url'] }}" target="_blank">
                {{ $experience['company'] }}
            </a>
            @else
                {{ $experience['company'] }}
            @endif
            &#8211;
            {{ $experience->location }}
        </p>
        @if($experience['description'])
            <p>{!! $experience['description'] !!}</p>
        @endif
    @endforeach


<!--Education-->
    <p class="title is-size-6">Education</p>
    <hr />
    @foreach($education as $e)
        <table>
            <tr>
                <th class="has-text-left">
                    {{ $e->degree }}
                </th>
                <th class="has-text-right">
                    {{ $e->to }}
                </th>
            </tr>
        </table>
        <p>{{ $e->school }}</p>
@endforeach

<!--Skills-->
    <p class="title is-size-6">Skills</p>
    <hr />
    <table>
        <thead>
        <tr>
            @foreach($skills as $skill)
                <th>{{ $skill->name }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($skills as $skill)
                <td>
                    <ul>
                        @foreach($skill->children as $child)
                            <li>{{ $child->name }}</li>
                        @endforeach
                    </ul>
                </td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
