        
        // mqtt setup
        client = new Paho.MQTT.Client('203.194.112.5', Number('9001'), "clientId");

        // set callback handlers
        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessageArrived;

        // connect the client
        client.connect({onSuccess:onConnect});


        // called when the client connects
        function onConnect() {
        // Once a connection has been made, make a subscription and send a message.
        console.log("onConnect");
        client.subscribe("pln/realtime");
        message = new Paho.MQTT.Message("Hello");
        message.destinationName = "World";
        client.send(message);
        }
        // called when the client loses its connection
        function onConnectionLost(responseObject) {
        if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:"+responseObject.errorMessage);
        }
        }
        // called when a message arrives    
            
            
         

       
      
      window.Apex = {
  chart: {
    foreColor: "#fff",
    toolbar: {
      show: false
    }
  },
  colors: ["#FCCF31", "#17ead9", "#f02fc2"],
  stroke: {
    width: 3
  },
  dataLabels: {
    enabled: false
  },
  grid: {
    borderColor: "#40475D"
  },
  xaxis: {
    axisTicks: {
      color: "#333"
    },
    axisBorder: {
      color: "#333"
    }
  },
  fill: {
    type: "gradient",
    gradient: {
      gradientToColors: ["#F55555", "#6078ea", "#6094ea"]
    }
  },
  tooltip: {
    theme: "dark",
    x: {
      formatter: function (val) {
        return moment(new Date(val)).format("HH:mm:ss");
      }
    }
  },
  yaxis: {
    decimalsInFloat: 2,
    opposite: true,
    labels: {
      offsetX: -10
    }
  }
};

var trigoStrength = 3;
var iteration = 11;

function getRandom() {
  var i = iteration;
  return (
    (Math.sin(i / trigoStrength) * (i / trigoStrength) +
      i / trigoStrength +
      1) *
    (trigoStrength * 2)
  );
}

function getRangeRandom(yrange) {
  return Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
}

function generateMinuteWiseTimeSeries(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = baseval;
    var y =
      (Math.sin(i / trigoStrength) * (i / trigoStrength) +
        i / trigoStrength +
        1) *
      (trigoStrength * 2);

    series.push([x, y]);
    baseval += 300000;
    i++;
  }
  return series;
}

function getNewData(baseval, yrange) {
  var newTime = baseval + 300000;
  return {
    x: newTime,
    y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
  };
}
// line 1
var optionsLine = {
  chart: {
    height: 200,
    type: "line",
    stacked: true,
    animations: {
      enabled: true,
      easing: "linear",
      dynamicAnimation: {
        speed: 1000
      }
    },
    
    events: {
      animationEnd: function (chartCtx) {
        const newData1 = chartCtx.w.config.series[0].data.slice();
        newData1.shift();
        
        window.setTimeout(function () {
          chartCtx.updateOptions(
            {
              series: [
                {
                  data: newData1
                }
              ],
              subtitle: {
                text: parseInt(getRandom() * Math.random()).toString()
              }
            },
            false,
            false
          );
        }, 300);
      }
    },
    toolbar: {
      show: false
    },
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: "straight",
    width: 5
  },
  grid: {
    show: true,
    	borderColor: 'rgba('+ app.color.whiteRgb +', .15)',
  },
  markers: {
    size: 0,
    hover: {
      size: 0
    }
  },
  series: [
    {
      name: "Running",
      data: generateMinuteWiseTimeSeries(
        Date.now()+(3600*6*1000),
        12,
        {
          min: 30,
          max: 110
        }
      )
    }
  ],
  xaxis: {
    type: "datetime",
    range: 6000
  },
  fill: {
      opacity: .65
    },
  title: {
    text: "Processes",
    align: "left",
    style: {
      fontSize: "12px"
    }
  },
  subtitle: {
    text: "20",
    floating: true,
    align: "right",
    offsetY: 0,
    style: {
      fontSize: "22px"
    }
  },
  legend: {
    show: true,
    floating: true,
    horizontalAlign: "left",
    onItemClick: {
      toggleDataSeries: false
    },
    position: "top",
    offsetY: -33,
    offsetX: 60
  }
};

var chartLine = new ApexCharts(
  document.querySelector("#linechart"),
  optionsLine
);
chartLine.render();


var optionsLine1 = {
  chart: {
    height: 200,
    type: "line",
    stacked: true,
    animations: {
      enabled: true,
      easing: "linear",
      dynamicAnimation: {
        speed: 1000
      }
    },
    
    events: {
      animationEnd: function (chartCtx) {
        const newData1 = chartCtx.w.config.series[0].data.slice();
        newData1.shift();
        
        window.setTimeout(function () {
          chartCtx.updateOptions(
            {
              series: [
                {
                  data: newData1
                }
              ],
              subtitle: {
                text: parseInt(getRandom() * Math.random()).toString()
              }
            },
            false,
            false
          );
        }, 300);
      }
    },
    toolbar: {
      show: false
    },
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: "straight",
    width: 5
  },
  grid: {
    show: true,
    	borderColor: 'rgba('+ app.color.whiteRgb +', .15)',
  },
  markers: {
    size: 0,
    hover: {
      size: 0
    }
  },
  series: [
    {
      name: "Running",
      data: generateMinuteWiseTimeSeries(
        Date.now()+(3600*6*1000),
        12,
        {
          min: 30,
          max: 110
        }
      )
    }
  ],
  xaxis: {
    type: "datetime",
    range: 6000
  },
  fill: {
      opacity: .65
    },
  title: {
    text: "Processes",
    align: "left",
    style: {
      fontSize: "12px"
    }
  },
  subtitle: {
    text: "20",
    floating: true,
    align: "right",
    offsetY: 0,
    style: {
      fontSize: "22px"
    }
  },
  legend: {
    show: true,
    floating: true,
    horizontalAlign: "left",
    onItemClick: {
      toggleDataSeries: false
    },
    position: "top",
    offsetY: -33,
    offsetX: 60
  }
};

var chartLine1 = new ApexCharts(
  document.querySelector("#linechart1"),
  optionsLine1
);
chartLine1.render();





 function onMessageArrived(message) {
                a = JSON.parse(message.payloadString);
                var b = a.active_power;
                var b1 = a.freq;
            console.log(a.freq);
            jQuery('#rpm1').html(a.value);
            
            //chart
        iteration++;

  var now = Date.now()+(3600*7*1000);

  chartLine.updateSeries([
    {
      data: [
        ...chartLine.w.config.series[0].data,
        [chartLine.w.globals.maxX + (now - chartLine.w.globals.maxX) + 1000, b]
      ]
    }
    
  ]);
  chartLine1.updateSeries([
    {
      data: [
        ...chartLine1.w.config.series[0].data,
        [chartLine1.w.globals.maxX + (now - chartLine1.w.globals.maxX) + 1000, b1]
      ]
    }
    
  ]);
  console.log(chartLine.w.globals.maxX);
   console.log(a);
            // end chart 1

                }

        
