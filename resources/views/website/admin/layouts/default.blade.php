<!DOCTYPE html>
<html lang="en">

@include('website.admin.includes.head')

<body class="">
    <div class="wrapper ">
        @include('website.admin.includes.nav')
        
            @yield('main')
            <div class="content">
                
            </div>
            @include('website.admin.includes.footer')
        </div>
    </div>
    @include('website.admin.includes.scripts')
</body>
</html>