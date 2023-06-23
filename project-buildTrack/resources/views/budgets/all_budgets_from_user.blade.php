@extends('layouts.main')

@section('title')
    <title>All Budgets</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">Budgets</h2>

        <!-- Budget List -->
        <ul>
            @foreach ($user->budgets as $budget)
                <li><a href="{{ route('view_budget', ['id' => $budget->id]) }}">{{ $budget->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection

@section('endcontent')
@endsection
