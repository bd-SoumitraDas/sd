<!DOCTYPE html>
<html lang="en">

@include('website.student.includes.head')

<body class="">
    <div class="wrapper ">
        @include('website.student.includes.nav')
        
            @yield('main')
            <div class="content">
                
            </div>
            @include('website.student.includes.footer')
        </div>
    </div>
    @include('website.student.includes.scripts')
</body>
</html>