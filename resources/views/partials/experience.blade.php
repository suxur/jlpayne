<div class="experience">
    <p class="spread">
        <strong>{{ $experience['title'] }}</strong>
         <span>{{ $experience['duration'] }}</span>
    </p>
    <div class="content">
        <p>
            @if($experience['url'])
                <a href="{{ $experience['url'] }}" target="_blank">
                    {{ $experience['company'] }}
                </a>
            @else
                {{ $experience['company'] }}
            @endif
            &#124;
            {{ $experience['from'] }}
            &#8211;
            @if($experience['current'])
                Current
            @else
                {{ $experience['to'] }}
            @endif
        </p>
        @if($experience['description'])
            <p>{!! $experience['description'] !!}</p>
        @endif
    </div>
</div>
<hr>
