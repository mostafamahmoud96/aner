@can('update', $post)
    <livewire:edit-post :post="$post" />
@endcan

@can('delete', $post)
    <livewire:delete-post :post="$post" />
@endcan


@auth
    <livewire:edit-comment />
@endauth

@auth
    <livewire:delete-comment />
@endauth


