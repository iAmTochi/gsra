

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
<script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
<script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

@yield('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "positionClass": "toast-top-right",
        "progressBar": true,
        "showDuration": "20000",
        "hideDuration": "20000",
        "timeOut": "20000",
        "extendedTimeOut": "20000",
    }
    @if(session()->has('success'))
    toastr.success('{{session()->get('success')}}')
    @elseif(session()->has('info'))
    toastr.info('{{session()->get('info')}}')
    @elseif(session()->has('error'))
    toastr.error('{{session()->get('error')}}')
    @elseif(session()->has('warning'))
    toastr.error('{{session()->get('warning')}}')
    @endif
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6332be7454f06e12d89714df/1gdv3fvds';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>

