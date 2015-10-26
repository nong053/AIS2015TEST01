$(document).ready(function(){
	$("#gridEventList").kendoGrid({
       // height: 400,
        scrollable: false,
       // groupable: true,
        sortable: true,
        pageable: {
            refresh: true,
            pageSizes: true,
            buttonCount: 5
        },
    });
	
	$("#btnEvenShowHidden").click(function(){
		
		$("#gridEventList").toggle("slow");
		
		return false;
	});
});