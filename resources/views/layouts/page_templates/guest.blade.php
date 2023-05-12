@include('layouts.navbars.navs.guest')

<section>
<div class="wrapper wrapper-full-page ">
    <div class="full-page section-image" filter-color="black" style="background-image: url('{{ asset('img/aula_login.jpg') }}'); background-size: cover; ">
        @yield('content')
        @include('layouts.footer')
    </div>
</div>
</section>

<style type="text/css">
#wrapper {
    width:100%;/* or whatever it needs to be*/
    min-height:100%;
}
</style>
