<div class="overlay"></div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="./js/app.js"></script>
<script>
    $(document).ready(function () {
        $('#checkin').datepicker({
            format: 'yyyy-mm-dd', // Định dạng ngày tháng
            autoclose: true,
            todayHighlight: true,
            clearBtn: true,
            language: 'en-GB' // Ngôn ngữ (ở đây là tiếng Anh)
        });
    });
    $(document).ready(function () {
        $('#checkout').datepicker({
            format: 'yyyy-mm-dd', // Định dạng ngày tháng
            autoclose: true,
            todayHighlight: true,
            clearBtn: true,
            language: 'en-GB' // Ngôn ngữ (ở đây là tiếng Anh)
        });
    });
</script>

</body>

</html>