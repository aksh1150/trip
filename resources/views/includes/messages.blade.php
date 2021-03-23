@if (count($errors) > 0)
<div class="alert alert-danger" >
  @foreach ($errors->all() as $error)
    <p >{{ $error }}</p>
  @endforeach
</div>
@endif

@if (session()->has('message'))
	<p class="alert alert-success">{{ session('message') }}</p>
@endif