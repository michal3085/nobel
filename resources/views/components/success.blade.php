<div class="position-fixed top-0 start-50 translate-middle-x p-2" style="z-index: 9999;">
    <div class="toast align-items-center text-white border-0 bg-success bg-opacity-75" role="alert" aria-live="assertive" aria-atomic="true" id="nobel-toast-success-id">
        <div class="d-flex">
            <div class="toast-body" id="asis-toast-success-body-id">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>


    <script>
        $(function(){
            @if (session()->has('success'))
            $('#nobel-toast-success-id').toast({ delay: 2000 });
            $('#nobel-toast-success-id').toast('show');
            @endif
        });
    </script>

