function diag_pie(id1,labels,data) {

var ctx = document.getElementById(id1);
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: data,
            backgroundColor: [
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
                'rgba(255, 70, 74, 1)',
            ]
        }]
    }
});

}

function diag_lines(id1) {
var ctx = document.getElementById(id1);
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
	"labels":["January","February","March","April","May","June","July"],
        datasets: [{
	    label: "Line1",
            data: [3,5,7,9,11,15],
            backgroundColor: [ 'rgba(4, 183, 171, 0.5)' ]
        },
	{
	    label: "Line2",
            data: [11,4,1,15,3,6],
            backgroundColor: [ 'rgba(4, 0, 0, 0.5)' ]
        }
	]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }],
            xAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
}

function diag_bar(id1) {

var ctx = document.getElementById(id1);
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
            ],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }

});

}

function diag_horzbar(id1) {

var ctx = document.getElementById(id1);
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
            ],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

}


function diag_bubble(id1) {

var ctx = document.getElementById(id1);
var myChart = new Chart(ctx, {
    type: 'bubble',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [ 
		{"x":10, "y":5, "r":5}, 
		{"x":15, "y":7, "r":11}, 
		{"x":12, "y":13, "r":6}, 
		{"x":11, "y":5, "r":9}, 
		{"x":20, "y":8, "r":19}, 
		{"x":5, "y":2, "r":8}
	    ],
            backgroundColor: [
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
                'rgba(4, 183, 171, 1)',
                'rgba(55, 70, 74, 1)',
            ]
        }]
    }
});

}
