const ctx = document.getElementById('myChart');

const chartAreaBorder = {
  id: 'chartAreaBorder',
  beforeDraw(chart, args, options) {
    const { ctx, chartArea: { left, top, width, height } } = chart;

    ctx.save();
    ctx.strokeStyle = options.borderColor || 'red';
    ctx.lineWidth = options.borderWidth || 2;
    ctx.setLineDash(options.borderDash || []);
    ctx.lineDashOffset = options.borderDashOffset || 0;

    ctx.beginPath();

    // Vẽ viền trái
    ctx.moveTo(left, top);
    ctx.lineTo(left, top + height);

    // Vẽ viền dưới
    ctx.moveTo(left, top + height);
    ctx.lineTo(left + width, top + height);

    ctx.stroke();
    ctx.restore();
  }
};


new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['2024-02-01', '2024-02-02', '2024-02-03', '2024-02-04', '2024-02-05', '2024-02-06', '2024-02-07'],
    datasets: [
      {
        label: 'Doanh thu',
        data: [12, 19, 3, 5, 2, 3, 4],
        borderWidth: 1,
        borderColor: 'blue',
        tension: 0.3
      }, 
      {
        label: 'Chi phí',
        data: [11, 14, 9, 4, 1, 3, 9],
        borderWidth: 1,
        borderColor: 'red',
        tension: 0.3
      }, 
      {
        label: 'Lợi nhuận',
        data: [17, 10, 2, 6, 9, 11, 7],
        borderWidth: 1,
        borderColor: 'orange',
        tension: 0.3
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      chartAreaBorder: {
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [5, 4],
        borderDashOffset: 2,
      }
    },
    scales: {
      x: {
        title: {
          display: true,
          text: 'Thời gian' 
        }
      },
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Tiền (VND)' 
        }
      }
    }
  },
  plugins: [chartAreaBorder]
});
