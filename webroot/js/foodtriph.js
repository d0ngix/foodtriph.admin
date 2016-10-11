/**
 * Modal - Add New Vendor
 */
$("#btnNewVendor").click(function(e){
	e.preventDefault();
    $.ajax({
        url: "/vendors/add", 
        success: function(result){
        	$("#modalNewVendor .modal-body").html(result);
    	}
	});
	
});

/**
 * Modal - Update Vendor Image
 */
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

/**
 * Modal - Edit Vendor Details
 */						
$("#btnEditVendor").click(function(e){
	e.preventDefault();
    $.ajax({
        url: "/vendors/edit", 
        success: function(result){
        	$("#modalEditVendor .modal-body").html(result);
    	}
	});
	
});

/**
 * Modal - Add Menu
 */
$(".btnNewMenu").click(function(e){
	e.preventDefault();
	obj = $(this);
    $.ajax({
        url: "/menus/add/"+obj.attr('vendor-uuid'), 
        success: function(result){
        	$("#modalNewMenu .modal-body").html(result);
    	}
	});
});

/**
 * Modal - Edit Menu
 */
$(".btnEditMenu").click(function(e){
	e.preventDefault();
	obj = $(this);
    $.ajax({
        url: "/menus/edit/"+obj.attr('menu-id') + "/" + obj.attr('vendor-uuid'), 
        success: function(result){
        	$("#modalEditMenu .modal-body").html(result);
    	}
	});
});

/**
 * Modal - Add New Branch (Vendor Addresss)
 */
$(".btnNewBranch").click(function(e){
	e.preventDefault();
	obj = $(this);
	$.ajax({
	    url: "/vendorAddresses/add/"+obj.attr('vendor-uuid'), 
	    success: function(result){
	    	$("#modalNewBranch .modal-body").html(result);
		}
	});

});

/**
 * Modal - Edit Branch (Vendor Addresss)
 */
$(".btnEditVendorAddress").click(function(e){
	e.preventDefault();
	obj = $(this);
	$.ajax({
	    url: "/vendorAddresses/edit/"+obj.attr('branch-id')+"/"+obj.attr('vendor-uuid'), 
	    success: function(result){
	    	$("#modalEditBranch .modal-body").html(result);
		}
	});

});

/**
 * Modal - Add New Menu Addons
 */
$(".btnNewMenuAddOn").click(function(e){
	e.preventDefault();
	obj = $(this);
	$.ajax({
	    url: "/menuAddOns/add/"+obj.attr('vendor-uuid'), 
	    success: function(result){
	    	$("#modalNewMenuAddOn .modal-body").html(result);
		}
	});

});

/**
 * Modal - Edit Menu Addons
 */
$(".btnEditMenuAddOn").click(function(e){
	e.preventDefault();
	obj = $(this);
	$.ajax({
	    url: "/menuAddOns/edit/"+obj.attr('menu-addon-id')+'/'+obj.attr('vendor-uuid'), 
	    success: function(result){
	    	$("#modalEditMenuAddOn .modal-body").html(result);
		}
	});

});