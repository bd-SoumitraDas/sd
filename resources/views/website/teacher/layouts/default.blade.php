<!DOCTYPE html>
<html lang="en">

@include('website.teacher.includes.head')

<body class="">
    <div class="wrapper ">
        @include('website.teacher.includes.nav')
        
            @yield('main')
            <div class="content">
                
            </div>
            @include('website.teacher.includes.footer')
        </div>
    </div>
    @include('website.teacher.includes.scripts')
</body>
</html>