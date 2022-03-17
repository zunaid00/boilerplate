@extends('backend.layouts.app')

@section('title', __('View Company'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Company')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.auth.company.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
              

                <tr>
                    <th>@lang('Title')</th>
                    <td><img src="{{ $user->avatar }}" class="user-profile-image" /></td>
                </tr>

                <tr>
                    <th>@lang('Description')</th>
                    <td>{{ $user->name }}</td>
                </tr>

                <tr>
                    <th>@lang('Address')</th>
                    <td>{{ $user->email }}</td>
                </tr>

              
td>
    </x-backend.card>
@endsection
