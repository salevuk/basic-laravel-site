@extends('layouts.app')

@section('content')

    <div class="contact_container">
        <div class="contact_form">
            @if(session('message')==true)
                <ul>
                    <li>{{session('message')}}</li>
                </ul>
            @endif
            @if ($errors->any())
              <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
              </ul>
            @endif
            <form action="{{route('contact.submit')}}" method="POST" class="form">
                {{ csrf_field() }}
                <div>
                    <h2 class="h2-primary">CONTACT US!</h2>
                </div>
                <div class="form_group">
                   <input type="text" class="form_input" placeholder="Full name" id="name" name="name" value="{{old('name')}}" required>
                   <label for="name" class="form_label">Full name</label>
               </div>
               <div class="form_group">
                   <input type="email" class="form_input" placeholder="Email address" id="email" name="email" value="{{old('email')}}">
                   <label for="email" class="form_label">Email address</label>
               </div>
               <div class="form_group">
                <textarea type="text" class="form_input" rows="10" cols="30" placeholder="Message" id="message" name="message" value="{{old('message')}}" required></textarea>
            </div>
               <div class="form_group">
                   <input class="btn" type="submit" value="Send message">
               </div>
            </form>
        </div>
    </div>

@endsection
