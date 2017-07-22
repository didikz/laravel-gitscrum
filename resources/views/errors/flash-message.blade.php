@if(Session::has('success'))
<<<<<<< HEAD
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            {{ Session::get('success') }}
=======
    <div class="col-lg-12">
        <div class="alert alert-success alert-errors">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         {{ Session::get('success') }}
>>>>>>> upstream/develop
        </div>
    </div>
@endif
