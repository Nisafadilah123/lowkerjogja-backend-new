@if (Session::has('success'))
<div {{ $attributes }}>
    <div class="alert alert-success">
        {{ Session::get('success') }}

    </div>
@endif
