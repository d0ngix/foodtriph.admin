$("#btnNewVendor").click(function(e){
	e.preventDefault();
    $.ajax({
        url: "/vendors/add", 
        success: function(result){
        	$("#modalNewVendor .modal-body").html(result);
    	}
	});
	
});

$(".vendor-image").click(function(e){
	e.preventDefault();
	obj = $(this);
	uuid = obj.attr('uuid');
    $.ajax({
        url: "/vendors/ajxEditPhoto/" + uuid, 
        success: function(result){
            
        	$("#modalEditVendorPhoto .modal-body").html(result);
    	}
	});
	
});
						
$("#btnEditVendor").click(function(e){
	e.preventDefault();
    $.ajax({
        url: "/vendors/edit", 
        success: function(result){
        	$("#modalEditVendor .modal-body").html(result);
    	}
	});
	
});
//
//$("#btnAddMenu").click(function(e){
//	e.preventDefault();
//	obj = $(this);
//    $.ajax({
//        url: "/menus/add", 
//        success: function(result){
//        	$("#modalAddMenu .modal-body").html(result);
//    	}
//	});
//	
//});