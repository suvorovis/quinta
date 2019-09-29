<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawAnnotations);

    function drawAnnotations() {

      var data = google.visualization.arrayToDataTable([
        ['Direction', 'Численность трудоустроенных', {type: 'string', role: 'annotation'}],
        @foreach($directions as $direction)
            ['{{ $direction['name'] }}', {{ $direction['count'] }}, '{{ $direction['count'] }}'],
        @endforeach
      ]);

      var options = {
        titleTextStyle: {
            'color': 'white',
            fontSize: 20
        },
        
        backgroundColor: {
            'fill': 'transparent'
        },
        legend: {
            position: 'none'
        },
        colors: ['#009cae'],
        chartArea: {width: '40%', height: '80%'},
        annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 12,
            auraColor: 'none',
            color: 'black'
          },
          boxStyle: {
            stroke: '#ccc',
            strokeWidth: 1,
            gradient: {
              color1: '#f3e5f5',
              color2: '#f3e5f5',
              x1: '0%', y1: '0%',
              x2: '100%', y2: '100%'
            }
          }
        },
        hAxis: {
            minValue: 0,
            textStyle: {
                color: 'transparent'
            },
            gridlines: {
                color: 'transparent'
            }
        },
        vAxis: {
            textStyle: {
                color: 'white',
                fontSize: 18
            }
        },
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
</script>