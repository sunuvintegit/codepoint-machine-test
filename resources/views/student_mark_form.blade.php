@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                <form method="POST" id="student_mark" action="{{route('students.addMark')}}">
                       @csrf

                        

                        

                        

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Student') }}</label>

                            <div class="col-md-6">
                               <select class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                               <option value="">Select a Student</option>
                                @foreach ($students as $s)
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                                @endforeach
                               </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="term" class="col-md-4 col-form-label text-md-end">{{ __('Term') }}</label>

                            <div class="col-md-6">
                               <select class="form-control @error('term') is-invalid @enderror" id="term" name="term">
                               <option value="">Select a Term</option>
                              
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Third">Third</option>
                               </select>

                                @error('term')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="maths" class="col-md-4 col-form-label text-md-end">{{ __('Maths') }}</label>

                            <div class="col-md-6">
                                <input id="maths" type="text" class="form-control @error('maths') is-invalid @enderror" name="maths" value="{{ old('maths') }}"  autocomplete="maths">

                                @error('maths')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="science" class="col-md-4 col-form-label text-md-end">{{ __('Science') }}</label>

                            <div class="col-md-6">
                                <input id="science" type="text" class="form-control @error('science') is-invalid @enderror" name="science" value="{{ old('science') }}"  autocomplete="science">

                                @error('science')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="computer" class="col-md-4 col-form-label text-md-end">{{ __('Computer') }}</label>

                            <div class="col-md-6">
                                <input id="computer" type="text" class="form-control @error('computer') is-invalid @enderror" name="computer" value="{{ old('computer') }}"  autocomplete="computer">

                                @error('computer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
