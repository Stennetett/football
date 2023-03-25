//var lastname = localStorage.getItem(2);



//var vikt = document.querySelector("#myDIV > form > input[type=number]:nth-child(7)").value;


  starter_value = parseInt(name) 



//script för min chart
var xyValues = [
{x:0, y:starter_value},
{x:7, y:8},
{x:14, y:8},
{x:21, y:9},
{x:28, y:9},
{x:35, y:9},
{x:42, y:10},
{x:49, y:11},
{x:56, y:14},
{x:63, y:14},
{x:70, y:15}
];


new Chart("myChart2", {
type: "scatter",
data: {
  datasets: [{
    pointRadius: 4,
    pointBackgroundColor: "rgb(76,175,80)",
    data: xyValues
  }]
},
options: {
  legend: {display: false},
  scales: {
    xAxes: [{ticks: {min: 0, max:78}}],
    yAxes: [{ticks: {min: 6, max:200}}],
  }
}
});