@extends('layouts.master')

@section('ex-title', 'یادداشت ها')

@section('content')
    <div class="col p-3">
        @foreach ($article as $item)
            <div class="row border-zigzag my-2">
                <div class="col">
                <a href="{{route("noteex",$item->slug)}}">
                        <h1 class="badr_bold">
                            {{ $item->title }}
                        </h1>
                    </a>
                    <div class="row mx-auto">
                        <h4 class="ml-auto text-subtitle badr_bold col-12 col-md p-0">
                            {{ $item->ex_title }}
                        </h4>
                        <p class="col text-date text-left">
                            {{ $item->Time() }}
                        </p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
