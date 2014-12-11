

window.onload = function(){

    $.getJSON( "json/getcaloriessemaine.php?userID=2")
        .done(function(data) {
            var lineChartData = {
                labels : ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"],
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
            var graphCalorieIng = document.getElementById("graphCalorieIng").getContext("2d");
            window.myLine = new Chart(graphCaloriePerd).Line(lineChartData, {
                responsive: true
            });
            window.myLine = new Chart(graphCalorieIng).Line(lineChartData, {
                responsive: true
            });
        })
        .fail(function() {
            console.log( "error" );
        });

};