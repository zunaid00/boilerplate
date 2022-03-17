@inject('model', '\App\Domains\Auth\Models\Company')

@extends('backend.layouts.app')

@section('title', __('Create Company'))

@section('content')
    <x-forms.post :action="route('admin.auth.company.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Company')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.auth.company.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Title')</label>
                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" placeholder="{{ __('Title') }}" value="{{ old('name') }}" maxlength="100" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Description')</label>
                        <div class="col-md-10">
                            <input type="text" name="description" class="form-control" placeholder="{{ __('Description') }}" value="{{ old('name') }}" maxlength="100" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">@lang('Address')</label>
                        <div class="col-md-10">
                            <input type="text" name="address" class="form-control" placeholder="{{ __('Address') }}" value="{{ old('name') }}" maxlength="100" required />
                        </div>
                    </div>
                
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Company')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
