$('.breadcrumbs li a').each(function(){

    var breadWidth = $(this).width();

    if($(this).parent('li').hasClass('active') || $(this).parent('li').hasClass('first')){

    

    } else {

        $(this).css('width', 75 + 'px');

        $(this).mouseover(function(){
            $(this).css('width', breadWidth + 'px');
        });

        $(this).mouseout(function(){
            $(this).css('width', 75 + 'px');
        });
    }

        
});



/*Zoom Imagenes  */

/*
        $(function () {
            $("#img_01").imageLens({ lensSize: 250 });
            /*$("#img_03").imageLens({ imageSrc: "sample01.jpg" });*/
            /*$("#img_04").imageLens({ borderSize: 8, borderColor: "#06f" });
        }); 

        */