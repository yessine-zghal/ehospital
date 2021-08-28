$(document).ready(function () {

    

    var barChartData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
            {
                label: "Dataset 1",
                backgroundColor: "rgba(0, 158, 251, 0.5)",
                borderColor: "rgba(0, 158, 251, 1)",
                borderWidth: 1,
                data: [35, 59, 80, 81, 56, 55, 40],
            },
            {
                label: "Dataset 2",
                backgroundColor: "rgba(255, 188, 53, 0.5)",
                borderColor: "rgba(255, 188, 53, 1)",
                borderWidth: 1,
                data: [28, 48, 40, 19, 86, 27, 90],
            },
        ],
    };
    var ctx = document.getElementById("bargraph").getContext("2d");
    window.myBar = new Chart(ctx, {
        type: "bar",
        data: barChartData,
        options: { responsive: true, legend: { display: false } },
    });
    var couunts =[0,0,0,0,0,0,0,0,0,0,0,0]
    for(let i=0;i<patients.length;i++){
       let datte = patients[i]['created_at'];
       let month = Number(datte.substr(5,2));
       couunts[month-1]++;
    }
    var lineChartData = {
        labels: [
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
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "rgba(0, 158, 251, 0.5)",
                data: couunts,
            },
            
        ],
    };
    var linectx = document.getElementById("linegraph").getContext("2d");
    window.myLine = new Chart(linectx, {
        type: "line",
        data: lineChartData,
        options: {
            responsive: true,
            legend: { display: false },
            tooltips: { mode: "index", intersect: false },
        },
    });
    barChart();
    $(window).resize(function () {
        barChart();
    });
    function barChart() {
        $(".bar-chart")
            .find(".item-progress")
            .each(function () {
                var itemProgress = $(this),
                    itemProgressWidth =
                        $(this).parent().width() *
                        ($(this).data("percent") / 100);
                itemProgress.css("width", itemProgressWidth);
            });
    }
});
