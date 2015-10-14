$(document).ready(function(){
	$("#gridUserList").kendoGrid({
       // height: 400,
        sortable: true,
       // groupable: true,
        sortable: true,
        pageable: {
            refresh: true,
            pageSizes: true,
            buttonCount: 5
        },
    });
});