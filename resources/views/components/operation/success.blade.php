@if (Session::get('message'))
<div class="my-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

</div>

@endif