@section('header')
    <div class="container-fluid">
        <div class="row p-4 bg-primary blue-gradient">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{!! asset(config('path.images')).'/lspd-logo.png' !!}" style="width: 150px; height=150px;">
                    <h1 style="color: white;">Los Santos Police Department</h1>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-indigo btn-sm"><i class="far fa-user fa-sm pr-2" aria-hidden="true"></i>Connexion</button>
                </div>
            </div>
        </div>
    </div>
@endsection