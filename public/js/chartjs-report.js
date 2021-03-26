$(document).ready(function() {

    var pieData = [
        { //upcoming
            value: 30,
            color:"#CC0000"
        },
        { //failed
            value : 50,
            color : "#E0E4CC"
        },
        { //success
            value : 100,
            color : "#004966"
        }

    ];

    var barChartData = {
        labels : ["January","February","March","April"], 
        datasets : [
            { //upcoming
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [65,59,52,31]
            },
            { //failed
                fillColor : "rgba(153,51,51,0.8)",
                strokeColor : "rgba(204,0,0,0.84)",
                data : [19,12,27,20]
            },
            { //success
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [28,48,55,40]
            }
        ]
    };
   
    var curBar = new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
    var curPie = new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

});