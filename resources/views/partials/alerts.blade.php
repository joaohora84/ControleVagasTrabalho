@if (session()->has('error'))
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Error</h4>
    {{ session()->get('error') }}
  </div>
@endif

@if (session()->has('warning'))
  <div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-exclamation-circle"></i>Warning!</h4>
    {{ session()->get('warning') }}
  </div>
@endif

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Success</h4>
    {{ session()->get('success') }}
  </div>
@endif