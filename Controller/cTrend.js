
$(document).ready(function(){
	$("#chart").kendoChart({
		theme: "Flat",
		//theme: "MaterialBlack",
		chartArea: {
		    background: ""
		   },
        dataSource: {
            transport: {
                read: {
                    url: "Model/data.json",
                    dataType: "json"
                }
            },
            sort: {
                field: "time",
                dir: "asc"
            }
        },
        title: {
           // text: "Spain electricity production (GWh)"
        },
        legend: {
            position: "right",
            visible: false
        },
        seriesDefaults: {
            type: "line",
            style: "smooth"
        },
        series: [{
            field: "point1",
            name: "point1"
        }, {
            field: "point2",
            name: "point2"
        }, {
            field: "point3",
            name: "point3"
        },{
            field: "point4",
            name: "point4"
        },{
            field: "point5",
            name: "point5"
        },{
            field: "point6",
            name: "point6"
        },{
            field: "point7",
            name: "point7"
        },{
            field: "point8",
            name: "point8"
        }],
        categoryAxis: {
            field: "time",
            labels: {
                rotation: -90
            },
            crosshair: {
                visible: true
            }
        },
        valueAxis: {
            labels: {
                format: "N0"
            },
            majorUnit: 10000
        },
        tooltip: {
            visible: true,
            shared: true,
            format: "N0"
        }
    });
	
	/*
	$("#chart").kendoChart({
		theme: "Silver",
        title: {
           // text: "Gross domestic product growth \n /GDP annual %/"
        },
        legend: {
            position: "bottom"
        },
        chartArea: {
            background: ""
        },
        seriesDefaults: {
            type: "line",
            style: "smooth"
        },
        series: [{
            name: "India",
            data: [3.907, 7.943, 7.848, 9.284, 9.263, 9.801, 3.890, 8.238, 9.552, 6.855]
        },{
            name: "World",
            data: [1.988, 2.733, 3.994, 3.464, 4.001, 3.939, 1.333, -2.245, 4.339, 2.727]
        },{
            name: "Russian Federation",
            data: [4.743, 7.295, 7.175, 6.376, 8.153, 8.535, 5.247, -7.832, 4.3, 4.3]
        },{
            name: "Haiti",
            data: [-0.253, 0.362, -3.519, 1.799, 2.252, 3.343, 0.843, 2.877, -5.416, 5.590]
        },{
            name: "Haiti2",
            data: [-3.253, 5.362, -5.519, 6.799, 4.252, 3.343, 1.843, 1.877, -0.416, 6.590]
        },{
            name: "Haiti3",
            data: [-2.253, 3.362, -4.519, 5.799, 3.252, 2.343, 0.843, 0.877, -1.416, 5.590]
        },{
            name: "Haiti4",
            data: [-1.253, 2.362, -3.519, 4.799, 2.252, 1.343, 1.843, 1.877, -2.416, 4.590]
        }],
        valueAxis: {
            labels: {
                format: "{0}%"
            },
            line: {
                visible: false
            },
            axisCrossingValue: -10
        },
        categoryAxis: {
            categories: [2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011],
            majorGridLines: {
                visible: false
            },
            labels: {
                rotation: "auto"
            }
        },
        tooltip: {
            visible: true,
            format: "{0}%",
            template: "#= series.name #: #= value #"
        }
    });
    */
});