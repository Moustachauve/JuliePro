

window.onload = function(){

    var labelsJours = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];

    $.getJSON( "json/getcaloriessemaine.php")
        .done(function(data) {
            var lineChartData =
            {
                labels : labelsJours,
                datasets :
                [
                    {
                        label: "Calories",
                        fillColor : "rgba(48, 164, 255, 0.2)",
                        strokeColor : "rgba(48, 164, 255, 1)",
                        pointColor : "rgba(48, 164, 255, 1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(48, 164, 255, 1)",
                        data : data
                    }
                ]
            }
            var graphCalorieIng = document.getElementById("graphCalorieIng").getContext("2d");
            window.myLine = new Chart(graphCalorieIng).Line(lineChartData, {
                responsive: true
            });
        })
        .fail(function() {
            console.log( "error" );
        });

    $.getJSON( "json/getcaloriesbrulees.php")
        .done(function(data) {
            var lineChartData2 = {
                labels : labelsJours,
                datasets : [
                    {
                        label: "Calories",
                        fillColor : "rgba(48, 164, 255, 0.2)",
                        strokeColor : "rgba(48, 164, 255, 1)",
                        pointColor : "rgba(48, 164, 255, 1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(48, 164, 255, 1)",
                        data : data
                    }
                ]
            }
            var graphCaloriePerd = document.getElementById("graphCaloriePerd").getContext("2d");
            window.myLine = new Chart(graphCaloriePerd).Line(lineChartData2, {
                responsive: true
            });

        })
        .fail(function() {
            console.log( "error" );
        });
};