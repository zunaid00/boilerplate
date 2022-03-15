@extends('backend.layouts.app')

@section('title', __('Customer Management'))

@section('breadcrumb-links')
    @include('backend.auth.customer.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Customer Management')
        </x-slot>

        @if ($logged_in_user->hasAllAccess())
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.auth.customer.create')"
                    :text="__('Create Customer')"
                />
            </x-slot>
        @endif

        <x-slot name="body">
            <livewire:backend.users-table />
        </x-slot>
    </x-backend.card>
@endsection
