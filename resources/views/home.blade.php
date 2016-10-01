@extends('layouts.app')

@section('content')
<div class="container">

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createNewQuizModal">Create New Quiz</button>

 @include('partials.manageQuizzes.createNewQuizModal')
</div>
@endsection
