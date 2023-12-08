<div class="overlay"></div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- <script src="./js/app.js"></script> -->
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

<script>
$(document).ready(function(){
  $.ajax({
    url: 'get_data.php',
    method: 'GET',
    success: function(data) {
      var jsonData = JSON.parse(data);

      // Chuyển đổi dữ liệu để tạo biểu đồ
      var chartData = [];
      var months = [];
      
      for (var i = 0; i < jsonData.length; i++) {
        var monthData = {
          'month': jsonData[i]['month']
        };

        for (var key in jsonData[i]) {
          if (key !== 'month') {
            monthData[key] = parseInt(jsonData[i][key]);
            if (!months.includes(key)) {
              months.push(key);
            }
          }
        }

        chartData.push(monthData);
      }

      Morris.Area({
        element: 'area-chart',
        data: chartData,
        xkey: 'month',
        ykeys: months,
        labels: months,
        pointSize: 3,
        hideHover: 'auto',
        resize: true
      });
    }
  });
});
</script>


</body>

</html>