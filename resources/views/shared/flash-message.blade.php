@if(session()->has('message'))
<div class="text-center">
    <p class="text-success">{{session('message')}}</p>
</div>
@endif