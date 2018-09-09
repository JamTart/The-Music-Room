<head>
<style>

.shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
</style>
</head>

@extends('layouts.app')
    @extends('layouts.footer')

@section('content')
<!-- Modal what's on your mind -->
<!-- Text area -->

<div class="form-group shadow-textarea" >
  <!--  <label for="exampleFormControlTextarea6">Shadow and placeholder</label> -->
    <div data-toggle="modal" data-target="#basicExampleModal" style="margin:0 auto;height:5em; width:30em;"class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Feeling musically inspired?"><p style="font-weight: 40%;">Feeling musically inspired?</p></div>
</div>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">We Love when you post!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>

<!-- end modal -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
