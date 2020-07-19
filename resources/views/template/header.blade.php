@section('header')
    <div class="container-fluid">
        <div class="row p-4 bg-primary blue-gradient">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{!! asset(config('path.images')).'/lspd-logo.png' !!}" style="width: 150px; height=150px;">
                    <h1 style="color: white;">Los Santos Police Departement</h1>
                </div>
                <div class="ntmbtndemerde d-flex">
                    <div class="aligns-item-top">
                        @if (Auth::check())
                        <button type="button" class="btn btn-indigo btn-sm" data-toggle="modal" data-target="#modalLoginForm">{{ Auth::user()->name }}</button>
                        @else
                        <button type="button" class="btn btn-indigo btn-sm" data-toggle="modal" data-target="#modalLoginForm"><i class="far fa-user fa-sm pr-2" aria-hidden="true"></i>Connexion</button>
                        @endif
                    </div>
                    <div class="aligns-item-top ">
                        @if (Auth::check())
                            {!! Form::open(['route' => 'logout', 'method' => 'POST']) !!}
                            {!! Form::submit('Deconnexion', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade {!! ((!empty($errors->toArray())) ? ('show') : ('')) !!}" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-play prefix grey-text"></i>
          {!! Form::text('matricule', old('matricule'), ['class' => 'form-control validate']) !!}
          {!! Form::label('matricule', 'Matricule', ['data-error' => 'wrong', 'data-success' => 'right']) !!}
          @if ($errors->has('matricule'))
              <div class="invalid-feedback" style="color: red !important; display: block !important;">
                {{$errors->first('matricule')}}
              </div>
          @endif
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          {!! Form::password('password', ['class' => 'form-control validate']) !!}
          {!! Form::label('password', 'Mot de passe', ['data-error' => 'wrong', 'data-success' => 'right']) !!}

            @if ($errors->has('password'))
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
            @endif
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        {!! Form::submit('Connexion', ['class' => 'btn btn-dark rounded-pill']) !!}
      </div>
    </div>
  </div>
  {!! Form::close() !!}
</div>
@endsection