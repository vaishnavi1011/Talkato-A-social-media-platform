$(document).ready(function() {
    $.getJSON(
        "https://api.rootnet.in/covid19-in/stats/latest",
        null,
        function(data) {
            Obj = data.data.summary;
            console.log(data.data.regional);
            mainObj = data.data.regional.sort(function(a, b) {
                return (b.confirmedCasesIndian + b.confirmedCasesForeign -
                    (a.confirmedCasesIndian + a.confirmedCasesForeign)
                );
            });
            var k = "<tbody>";
            for (i = 0; i < mainObj.length; i++) {
                k += "<tr>";
                k += "<td>" + mainObj[i].loc + "</td>";
                k +=
                    "<td>" +
                    (mainObj[i].confirmedCasesIndian +
                        mainObj[i].confirmedCasesForeign) +
                    "</td>";
                k += "<td>" + mainObj[i].deaths + "</td>";
                k += "<td>" + mainObj[i].discharged + "</td>";
                k += "</tr>";
            }
            k += "</tbody>";
            document.getElementById("datahandler2").innerHTML = k;
            var j = "<tbody>";
            j += "<tr>";
            j += "<td>" + Obj.total + "</td>";
            j += "<td>" + Obj.confirmedCasesIndian + "</td>";
            j += "<td>" + Obj.confirmedCasesForeign + "</td>";
            j += "<td>" + Obj.deaths + "</td>";
            j += "<td>" + Obj.discharged + "</td>";
            j += "</tr>";
            j += "</tbody>";
            document.getElementById("datahandler1").innerHTML = j;
            console.log(Obj);
        }
    );
});