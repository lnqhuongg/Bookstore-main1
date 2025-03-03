const ctxtop = document.getElementById('myChartTop');
const data = {
    labels: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
    datasets: [
      {
        label: 'Số lượng: ',
        data: [12, 14, 25, 6, 7],
        // backgroundColor: ['rgba(123, 233, 145, 0.3','rgba(103, 238, 145, 0.3','rgba(52, 223, 145, 0.3','rgba(33, 213, 145, 0.3','rgba(79, 243, 145, 0.3']
      }
    ]
  };
const config = {
    type: 'pie',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        }
      }
    },
  };
new Chart(ctxtop, config);