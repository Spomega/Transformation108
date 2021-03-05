@extends('backend.layouts.app')

@section('title', __('Transformations User'))

{{--@section('breadcrumb-links')--}}
{{--    @include('backend.auth.user.includes.breadcrumb-links')--}}
{{--@endsection--}}

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('User Management')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.trans-users-table />
        </x-slot>
    </x-backend.card>
@endsection
