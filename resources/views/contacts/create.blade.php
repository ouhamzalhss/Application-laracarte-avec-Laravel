@extends('layoutes.base',['title'=>'Contact'])


@section('content')

<div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2 col-sm-10 col-offset-sm-1">
       <h2>Get in touch</h2>
       <p><span class="text-muted">If you having trouble with this service, please <a href="mailto:ouhamza.web.pro@gmail.com"> ask for help.</a></span></p>
       <form action="" method="post">
           {{csrf_field()}}
        <div class="form-group">
           <label for="name" class="control-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div> 
        <div class="form-group">
           <label for="email" class="control-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
           <label for="message" class="control-label sr-only">Message</label>
            <textarea rows="10" cols="10" required  name="message" id="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default btn-block" name="save">Submit Enquiry &raquo;</button>
        </div>
       </form>
   </div>
  </div>
</div>

@stop