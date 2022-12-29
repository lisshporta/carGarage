@if (session('success'))
<div style="text-align:center;margin-top:10px" x-data="{show: true}" x-init="setTimeout(() => show = false, 2500)" x-show="show">
    <div style="background-color:lightgray" class="alert alert-success">
        {{ session('success') }}
    </div>
</div>
@endif