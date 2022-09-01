var ctx = document.getElementById("line-chart");

(Chart.defaults.global.defaultFontFamily = "Cabin"),
    (Chart.defaults.global.defaultFontSize = 14),
    (Chart.defaults.global.defaultFontStyle = "500"),
    (Chart.defaults.global.defaultFontColor = "#808996");
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: _ydata,
        datasets: [
            {
                label: "Result",
                data: _xdata,
                backgroundColor: "transparent",
                borderColor: "#287dfa",
                pointBorderColor: "#ffffff",
                pointBackgroundColor: "#287dfa",
                pointBorderWidth: 2,
                pointRadius: 4,
            },
        ],
    },
    options: {
        tooltips: { backgroundColor: "#1c2540" },
        legend: { display: !1 },
        scales: {
            xAxes: [
                {
                    display: !0,
                    gridLines: { offsetGridLines: !1, display: !1 },
                },
            ],
            yAxes: [
                {
                    display: !0,
                    gridLines: { color: "#eee" },
                    ticks: { fontSize: 14 },
                },
            ],
        },
    },
});
