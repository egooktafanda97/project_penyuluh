
@include('layout.'.((!empty($hdr))?$hdr:'main_header'))
{{-- @include('layout.header_table') --}}
@include('layout.'.'main_nav')

{{-- @yield('title', 'petani') --}}
@yield('content')
{{-- @include('layout.footer_table') --}}
@include('layout.'.((!empty($ftr))?$ftr:'main_footer'))