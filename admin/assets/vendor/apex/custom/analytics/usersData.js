var options = {
  series: [
    {
      name: "",
      data: [200, 330, 548, 740, 880, 1100],
    },
  ],
  chart: {
    type: "bar",
    height: 210,
    toolbar: {
      show: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  plotOptions: {
    bar: {
      borderRadius: 0,
      horizontal: true,
      distributed: true,
      barHeight: "80%",
      isFunnel: true,
    },
  },
  colors: [
    "#297372",
    "#368180",
    "#43908F",
    "#4F9E9D",
    "#5CADAB",
    "#69BBB9",
    "#76C9C8",
    "#82D8D6",
    "#8FE6E4"
  ],
  dataLabels: {
    enabled: true,
    formatter: function (val, opt) {
      return opt.w.globals.labels[opt.dataPointIndex];
    },
    dropShadow: {
      enabled: true,
    },
  },
  xaxis: {
    categories: [
      "Grains",
      "Meat",
      "Dairy",
      "Processed Foods",
      "Healthy Fats",
      "Fruits & Vegetables",
    ],
  },
  legend: {
    show: false,
  },
};

var chart = new ApexCharts(document.querySelector("#earnings"), options);
chart.render();
