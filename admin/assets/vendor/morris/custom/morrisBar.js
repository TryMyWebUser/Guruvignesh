// Morris Bar Chart
Morris.Bar({
  element: "morrisBar",
  data: [
    { x: "2022 Q1", y: 2, z: 4, a: 2 },
    { x: "2022 Q2", y: 5, z: 3, a: 1 },
    { x: "2022 Q3", y: 2, z: 7, a: 4 },
    { x: "2022 Q4", y: 5, z: 6, a: 3 },
  ],
  xkey: "x",
  ykeys: ["y", "z", "a"],
  labels: ["Y", "Z", "A"],
  resize: true,
  hideHover: "auto",
  gridLineColor: "#ccd2da",
  barColors: ["#006445",
    "#107052",
    "#207D60",
    "#30896D",
    "#3F957A",
    "#4FA288",
    "#5FAE95"],
});
