

window.onload = function(){

    $.getJSON( "getcaloriessemaine.php?userID=2")
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
            var graphCalorie = document.getElementById("graphCalorie").getContext("2d");
            window.myLine = new Chart(graphCalorie).Line(lineChartData, {
                responsive: true
            });
        })
        .fail(function() {
            console.log( "error" );
        });

};