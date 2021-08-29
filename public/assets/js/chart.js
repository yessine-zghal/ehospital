$(document).ready(function () {

    var counts_covid =[0,0,0,0,0,0,0,0,0,0,0,0]
    var counts_non_covid =[0,0,0,0,0,0,0,0,0,0,0,0]
    for(let i=0;i<patients.length;i++){
       let datte = patients[i]['created_at'];
       let month = Number(datte.substr(5,2));
       let d = patients[i]['covid_check'];
       if(d=='oui'){
           counts_covid[month-1]++;
        }
        else{
            counts_non_covid[month-1]++;
        }
    }
    var barChartData = {
        labels: ["Jan",
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
        "Dec",],
        datasets: [
            {
                label: "Patients covid",
                backgroundColor: "rgba(0, 158, 251, 0.5)",
                borderColor: "rgba(0, 158, 251, 1)",
                borderWidth: 1,
                data: counts_covid,
            },
            {
                label: "Patients non covid",
                backgroundColor: "rgba(255, 188, 53, 0.5)",
                borderColor: "rgba(255, 188, 53, 1)",
                borderWidth: 1,
                data: counts_non_covid,
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
    var number_covid=[0,0,0];
    for(let j=0;j<patients.length;j++){
        let dattaa = patients[j]['covid_etat'];
        if(dattaa=='home'){
            number_covid[0]++;
        }
        if(dattaa=='hospital'){
            number_covid[1]++;
        }
        if(dattaa=='reanimation'){
            number_covid[2]++;
        }

    }

    new Chart(document.getElementById("piechart"), {
        type: 'pie',
        data: {
          labels: ["Covis_home", "Covid_hospital", "Covid_reanimation"],
          datasets: [{
            label: "Population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
            data: number_covid
          }]
        },
        options: {
         
        }
    });
    var health=[0,0];
    for(let j=0;j<patients.length;j++){
        let dtaa = patients[j]['covid_etat'];
        if(dtaa=='save'){
            health[0]++;
        }
        if(((dtaa=='home')||(dtaa=='hospital')||(dtaa=='reanimation'))&&(dtaa!='save')){
            health[1]++;


        }
        

    }



    new Chart(document.getElementById("doughnut"), {
        type: 'doughnut',
        data: {
          labels: ["Save", "Death"],
          datasets: [
            {
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: health
            }
          ]
        },
        options: {
          
        }
    });
});
