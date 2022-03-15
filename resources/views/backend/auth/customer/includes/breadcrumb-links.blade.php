<x-utils.link
    class="c-subheader-nav-link"
    :href="route('admin.auth.customer.deactivated')"
    :text="__('Deactivated Customer')"
    permission="admin.access.customer.reactivate" />

@if ($logged_in_user->hasAllAccess())
    <x-utils.link class="c-subheader-nav-link" :href="route('admin.auth.customer.deleted')" :text="__('Deleted Customer')" />
@endif
