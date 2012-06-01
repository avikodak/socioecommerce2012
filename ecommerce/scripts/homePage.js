
$(document).ready(function(){
              
    $(".infiniteScrollBtn").click(function(){
        
        $.ajax({
            type : "POST",
            url : '../src/textAjax.php',
            start : function(){
                $(".mainContent").append("<img src='BouncingLoader.gif' width=\"64\" height=\"64\" />");
            },
            success: function(data) {

                $(".mainContent").append(data);
            },
            error : function() {
                alert("Sorry, The requested property could not be found.");
            }
        });
    });
    $("#msg").ajaxError(function(event, request, settings){
        $(this).append("<li>Error requesting page " + settings.url + "</li>");
    });
   
    
    $(".mainContent").on("mouseenter",".image", function() {
        $(this).children(".getInfoForPic").css("display","inline");
        $(this).children(".imageInfo").css("display","inline");
       
    });
    $(".mainContent").on("mouseleave",".image", function() {
        $(this).children(".getInfoForPic").css("display","none");
        $(this).children(".imageInfo").css("display","none");
       
    });
    
    $(".image").on("click",".thoughtbot",function(event){
        
        var parent = $(this).parent().get(0);
        var srcOfImageElement= parent.getElementsByTagName("img")[0].getAttribute("src");
        $(".roundedBorderImage").attr("src",srcOfImageElement);
        
        
        $(".opacityDialogBox").css("display","inline-block");
        document.body.style.overflow="hidden";
    });
    
    $("#header_dialogBox").on("click",".close",function(){
        $(".opacityDialogBox").css("display","none");
        document.body.style.overflow="auto";
        

    });
    
    $("#moreInfo").on("click","a",function(){
        var urlImage=$(".imageInDialogBox > .roundedBorderImage").attr("src");
        var hrefValue = "http://localhost:8888/ecommerce/src/itemDescription.php?url="+urlImage;
        window.location.href=hrefValue;
    });
    
//    $(".partner").on("click",".image",function(){
//        var imageDivObject=$(this)[0];
//        var urlImage = imageDivObject.getElementsByClassName("imageSelector")[0].getElementsByTagName("img")[0].getAttribute("src");
//        var hrefValue = "http://localhost:8888/ecommerce/src/itemDescription.php?url="+urlImage;
//        window.location.href=hrefValue;
//    });
});

