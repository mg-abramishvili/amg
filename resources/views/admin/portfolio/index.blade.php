@extends('layouts.admin')
@section('title', 'Портфолио')
@section('add_button', route('admin_portfolio_create'))
@section('content')
<div class="w-100">
    <div class="box">
        <table class="table">
            <thead>
                <tr>
                    <td>Наименование</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach($portfolio as $portfolioItem)
                    <tr>
                        <td>
                            {{ $portfolioItem->name }}
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin_portfolio_item_edit', ['id' => $portfolioItem->id]) }}" class="btn btn-sm btn-outline-primary">Правка</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection