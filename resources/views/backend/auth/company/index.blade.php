@extends('backend.layouts.app')

@section('title', __('Company Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Company Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.auth.company.create')"
                :text="__('Create Company')"
            />
        </x-slot>

        
        <x-slot name="body">
            <livewire:backend.users-table />
        </x-slot>
       
    </x-backend.card>
@endsection
