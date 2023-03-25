

//var y = document.querySelector("#minTabell3 > tbody > tr:nth-child(2) > td:nth-child(2)").innerHTML;

var length_list = document.querySelector("#minTabell3").rows.length;


//var lastname = localStorage.getItem(2);
var element = []; 
starter_value = parseInt(jsVariable);
for (let index = 1; index < length_list; index++) {

  element[index] = document.querySelector("#minTabell3 > tbody > tr:nth-child("+String(index)+") > td:nth-child(2)").innerHTML;

}
console.log(element[2]);
//var vikt = document.querySelector("#myDIV > form > input[type=number]:nth-child(7)").value;

//script för min chart
var xyValues = [
  { x: 0, y: starter_value },
  { x: 7, y: element[1]},
  { x: 14, y: element[2]},
  { x: 21, y: element[3] },
  { x: 28, y: element[4] },
  { x: 35, y: element[5]},
  { x: 42, y: element[6]},
  { x: 49, y: element[7] },
  { x: 56, y: element[8] },
  { x: 63, y: element[9] },
  { x: 70, y: element[10] }
];


new Chart("myChart", {
  type: "scatter",
  data: {
    datasets: [{
      pointRadius: 4,
      pointBackgroundColor: "rgb(76,175,80)",
      data: xyValues
    }]
  },
  options: {
    legend: { display: false },
    scales: {
      xAxes: [{ ticks: { min: 0, max: 78 } }],
      yAxes: [{ ticks: { min: 0, max: 200 } }],
    }
  }
});