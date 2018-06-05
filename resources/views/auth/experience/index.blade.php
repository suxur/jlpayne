@extends('layouts.app')

@section('content')
    <div class="column">
        <div class="box">
            <div class="title">{{ __('Experience') }}</div>
            <a href="{{ route('experience.create') }}" class="button is-primary">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span>
                    Add New
                </span>
            </a>
            <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Company</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>
                @foreach($experiences as $experience)
                    <tr>
                        <td>
                            <a href="{{ route('experience.edit', compact('experience')) }}">
                                {{ $experience->company }}
                            </a>
                        </td>
                        <td>{{ $experience->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
