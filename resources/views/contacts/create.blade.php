@extends('layoutes.base',['title'=>'Contact'])


@section('content')

<div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2 col-sm-10 col-offset-sm-1">
       <h2>Get in touch</h2>
       <p><span class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracarte.admin_support_email')}}"> ask for help.</a></span></p>
       <form action="{{route('contact_path')}}" method="post" novalidate>
           {{csrf_field()}}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} ">
           <label for="name" class="control-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{old('name')}}">
              {!! $errors->first('name','<span class="help-block">:message</span>') !!}
        </div> 
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
           <label for="email" class="control-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{old('email')}}">
              {!! $errors->first('email','<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
           <label for="message" class="control-label sr-only">Message</label>
            <textarea rows="10" cols="10" required  name="message" id="message" class="form-control">{{old('message')}}</textarea>
              {!! $errors->first('message','<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="save">Submit Enquiry &raquo;</button>
        </div>
       </form>
   </div>
  </div>
</div>

@stop