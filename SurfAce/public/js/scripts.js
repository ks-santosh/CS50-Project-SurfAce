/**
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
 * Global JavaScript, if any.
 */
  function addlinkbar(str,navname) {
        
     if (str.length == 0) { 
         document.getElementById("pill").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  
                 $("#pill").text(xmlhttp.responseText);
             }
         }
         xmlhttp.open("GET", "barlink_update.php?q="+str+"&r="+navname, true);
         xmlhttp.send();
         $("#title").click();
     }
 }
 
 
        function addlinkmenu(str,pillname) {
        
     if (str.length == 0) { 
         document.getElementById("pill").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  
                 $("#pill").text(xmlhttp.responseText);
             }
         }
         xmlhttp.open("GET", "menulink_update.php?q="+str+"&r="+pillname, true);
         xmlhttp.send();
         $("#title").click();
         
     }
 }
 
       function deletelink(link, name , choice) {
        
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  
                 $("#nav").text(xmlhttp.responseText);
             }
         }
      
         xmlhttp.open("GET", "deletelink.php?link="+link+"&name="+name+"&choice="+choice, true);
         
         xmlhttp.send();  
                
     }
 
 
 $(document).ready(function() {
        
        $('.bar_content').hide(); //hides all the div boxes
        $('.pill_content').hide();
        
        $('.bar_content').eq(0).show();	//shows the first div
        
       //shows the div box corresponding to the link clicked
       
        var indexlist = 0; //stores the index of nav clicked
        var indexmenu = 0; // stores the index of pill clicked
        
        
        var navname;  //stores the nav name        
        var pillname; // stores the pill name
        
        $('.list_element').click(function() {
	 
	 indexlist = $(this).index();
	
        	$('.bar_content').hide();
        	$('.pill_content').hide();
        	$('.list_element').removeClass("active");
	        $('.menu_element').removeClass("active");
	    
	        $(this).addClass("active");
	        
	        $(".bar_content").eq(indexlist).show();
	         
	        navname = $(".list_element").eq(indexlist).text();
	        
	      	});
	
	
	    $('.pill_content').hide();
	    
	    $('.menu .menu_element').click(function() {
	        
	         
	         indexmenu = $(this).index();
	
        	$('.pill_content').hide();
        	$('.bar_content').hide();
            $('.list_element').removeClass("active");
	        $('.menu_element').removeClass("active");
	        
	        $(this).addClass("active");
	        
	        $(".pill_content").eq(indexmenu).show();
		    
		    pillname = $(".menu_element").eq(indexmenu).text();
	});
		
	
	$(".bar_content button").click(function() {
	
	    
	    $name = $(".url_bar").eq(indexlist-1).val();
	    
	    addlinkbar($name, navname);	
	});
	
	$(".pill_content button").click(function() {
	
	    
	    $name = $(".url_pill").eq(indexmenu).val();
	    
	    addlinkmenu($name, pillname);	
	});
	
	
	
	$(".cross").click(function() {
	    
	    var del = $(this).prev().text();
	    
	    $(this).prev(".link").remove();
	    $(this).prev(".framesymbol").remove();
	    $(this).next().remove();
	    $(this).remove();    
	    
	  if($(this).hasClass("navcross") == true)
	   {
	    deletelink(del , navname, 0);
	   }
	   
	   else
	   {
	    deletelink(del , pillname, 1);
	   }
	 
	  });
	  
	  $(".cross").hide();
	  
	  $('.link').mouseenter(function() {
	    
	    $(this).next().show();
	  
	  });
	
	     $('.crossdiv').mouseleave(function() {
	    
	    $(this).children('.cross').hide();
	  
	  });
	
	$(".framesymbol").click(function() {
	
	    $(".frame").remove();
	    var url = $(this).next().text();
	    $(this).next().next().next().html("<iframe class = 'frame' style='width: 950px; height: 400px;' src="+url+"></iframe>");  
	
	});
});
