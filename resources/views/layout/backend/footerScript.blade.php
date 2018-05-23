<script src="{{ asset('backend/js/jquery.js') }}"></script>
<script src="{{ asset('backend/js/bootstrapMin.js') }}"></script>
<script src="{{ asset('backend/js/datePicker.js') }}"></script>
<script src="{{ asset('backend/js/slimscroll.min.js') }}"></script>
<script src="{{ asset('backend/js/fastclick.min.js') }}"></script>
<script src="{{ asset('backend/js/appMin.js') }}"></script>
<script src="{{ asset('backend/js/inputMask.js') }}"></script>
<script src="{{ asset('backend/js/inputMaskDateExtension.js') }}"></script>
<script src="{{ asset('backend/js/inputMaskExtension.js') }}"></script>
<script src="{{ asset('backend/js/multipleSelectFullMin.js') }}"></script>
<script src="{{ asset('backend/js/bootstrapTimepickerMin.js') }}"></script>
<script src="{{ asset('backend/js/colorPicker.js') }}"></script>
<script src="{{ asset('backend/js/bootstrapTagsinput.js') }}"></script>
<script src="{{ asset('backend/js/editor.js') }}"></script>
<script src="{{ asset('backend/js/customScript.js') }}"></script>
<script src="{{ asset('backend/js/occScript.js') }}"></script>
<script src="{{ asset('backend/js/dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.mask.js') }}"></script>
<script src="{{ asset('backend/js/dateRangePicker.js') }}"></script>  
<script src="{{ asset('backend/js/canvasjs.min.js') }}"></script>
<script src="{{ asset('backend/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/js/select2.full.min.js') }}"></script>





<script>
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('.date').datepicker({
        format: 'yyyy-mm-dd'
    });
    $("[data-mask]").inputmask();
    $(".select2").select2();
    $(".timepicker").timepicker({
        showInputs: false
    });
    $(".colorpicker").colorpicker();
    $(function () {
        $(".textarea").wysihtml5();
    });
    $('[data-toggle="popover"]').popover();
});
</script>
