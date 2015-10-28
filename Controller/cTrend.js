
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
	
	
	/*click create trend graph start*/
	$("[href='#tab-3']").click(function(){
		$.ajax({
			url:"trend_setting.php",
			type:"html",
			async:false,
			success:function(data){
				//alert(data);
				$("#areaTrendSeting").html(data);
			}
		});
	});
	/*click create trend graph end*/
	
	
	$("#editTrendPoint").click(function(){
		$.ajax({
			url:"editTrendPoint.php",
			type:"html",
			async:false,
			success:function(data){
				//alert(data);
				$("#editTrendPointArea").html(data);
				
				$("#gridTrendPointList").kendoGrid({
				        sortable: true,
				        pageable: {
				            refresh: true,
				            pageSizes: true,
				            buttonCount: 5
				        },
				    });
				
				
			}
		});
	});
	
});