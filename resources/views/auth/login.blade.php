@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="background-color: #a4c2f4; border-radius: 50px">
                <div class="text-center">
                    <!-- Imagen -->
                    <img src="https://i.ibb.co/jwWm9RD/Mecaservicio.png" alt="Mecaservicio" width="250" height="250">
                </div>
                <br>
                <h3 class="text-center"><b>Mecaservicos AVV</b></h3>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-2">
                            <label for="email" class="col-md-1 col-form-label text-md-end"></label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                       placeholder="Usuario" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-2">
                            <label for="password" class="col-md-1 col-form-label text-md-end"></label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                       placeholder="Contraseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0 text-center">
                            <div class="">
                                <button type="submit" class="btn btn-outline-primary text-black" style="width: 200px;">
                                    Ingresar
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
