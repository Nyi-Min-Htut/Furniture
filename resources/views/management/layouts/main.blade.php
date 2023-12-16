@extends('management.layouts.master')
@section('body-content')
<div class=' flex bg-gray-200'>
   <div>
    @include('management.layouts.sidebar')
   </div>
    <div class='bg-gray-200 w-full  h-screen'>
        <div class='mx-5 bg-indigo-50 rounded-sm shadow-md p-4 mt-10'>
            @yield('content')
        </div>
    </div>
</div>

@endsection