// Denmark
$(function () {
  $("#mapDenmark").vectorMap({
    map: "dk_mill",
    zoomOnScroll: false,
    regionStyle: {
      initial: {
        fill: "#297372",
      },
      hover: {
        "fill-opacity": 0.8,
      },
      selected: {
        fill: "#333333",
      },
    },
    backgroundColor: "transparent",
  });
});
