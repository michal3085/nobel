<div class="position-fixed" style="top: 80px; right: 20px; z-index: 9999;">
    <div class="toast align-items-center border-success" role="alert" aria-live="assertive" aria-atomic="true" id="nobel-toast-success-id">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
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
