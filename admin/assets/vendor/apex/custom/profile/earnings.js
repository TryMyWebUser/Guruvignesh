var options = {
  chart: {
    height: 250,
    type: "bar",
    toolbar: {
      show: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
    width: 1,
    colors: ["#006445",
      "#107052",
      "#207D60",
      "#30896D",
      "#3F957A",
      "#4FA288",
      "#5FAE95"],
  },
  series: [
    {
      name: "Projects",
      data: [10, 40, 15, 40, 20, 35, 20, 10, 31, 43, 56, 29],
    },
    {
      name: "Earnings",
      data: [2, 8, 25, 7, 20, 20, 51, 35, 42, 20, 33, 67],
    },
  ],
  grid: {
    borderColor: "#ccd2da",
    strokeDashArray: 5,
    xaxis: {
      lines: {
        show: true,
      },
    },
    yaxis: {
      lines: {
        show: false,
      },
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 10,
      left: 0,
    },
  },
  xaxis: {
    categories: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
  },
  yaxis: {
    labels: {
      show: false,
    },
  },
  colors: ["#eaf1ff", "#e2e5ec", "#eff1f6"],
  markers: {
    size: 0,
    opacity: 0.3,
    colors: ["#eaf1ff", "#e2e5ec", "#eff1f6"],
    strokeColor: "#ffffff",
    strokeWidth: 2,
    hover: {
      size: 7,
    },
  },
};

var chart = new ApexCharts(document.querySelector("#earningsGraph"), options);

chart.render();
