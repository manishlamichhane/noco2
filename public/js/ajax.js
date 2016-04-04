$(document).ready(function(){

    $("#garbage-category").change(function(){

        $.ajax({

        	method:'get',
        	url: '/garbage/returnGarbageType/'+$(this).val(),
        	success:function(reply){

        		alert(reply);

        	}

        });

    });

});