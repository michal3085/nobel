<div class="position-fixed" style="top: 85px; right: 20px; z-index: 9999;">
    <div class="toast align-items-center border-danger" role="alert" aria-live="assertive" aria-atomic="true" id="nobel-toast-error-id">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('error') }}
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
    $(function(){
        @if (session()->has('error'))
        $('#nobel-toast-error-id').toast({ delay: 2000 });
        $('#nobel-toast-error-id').toast('show');
        @endif
    });
</script>
