@extends('layouts.master')

@section('ex-title', 'یادداشت ها')

@section('content')
    <div class="col p-3">
        <div class="row border-zigzag my-2">
            <div class="col">
                <h1 class="badr_bold">
                    {{ $article->title }}
                </h1>
                <div class="row mx-auto">
                    <h4 class="ml-auto text-subtitle badr_bold col-12 col-md p-0">
                        {{ $article->ex_title }}
                    </h4>
                    <p class="col text-date text-left">
                        {{ $article->Time() }}
                    </p>
                </div>

            </div>
        </div>
        <div class="border-zigzag my-2 text-black">
            <p>
                @php
                echo $article->content;
                @endphp
            </p>
        </div>
    </div>
@endsection
