@extends('layouts.admin')
@section('title', $portfolioItem->name)
@section('content')
<div class="w-100">
    <portfolio-edit :portfolio_item_id="{{ $portfolioItem->id }}"></portfolio-edit>
</div>
@endsection