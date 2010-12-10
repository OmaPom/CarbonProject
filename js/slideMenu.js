/* Usage for the plugin
         this are the default options if not assigned like follows:

        ulPadding: 0
        velocity: 800
        edges: 100
        debug: false
        clickFunction: null
             */
$(document).ready(function() {
    var velforanimations = 500;
    function clickMe(){
        var linkid = $(this).find('a').attr('href');
        $(this).animate({
            height: 140
        }, {
            queue:false,
            duration:velforanimations
        });
        $(this).animate({
            width: 184
        }, {
            queue:false,
            duration:velforanimations
        });
        $(this).find('span').animate({
            "opacity":0.8
        }, velforanimations);
        $(this).animate({
            "opacity":1
        }, velforanimations);
    //window.location = linkid; return false;
    }
    function selectedMe(){
        $(this).animate({
            height: 140
        }, {
            queue:false,
            duration:velforanimations
        });
        $(this).animate({
            width: 184
        }, {
            queue:false,
            duration:velforanimations
        });
        $(this).find('span').animate({
            "opacity":0.8
        }, velforanimations);
        $(this).animate({
            "opacity":1
        }, velforanimations);
    }
    function overMe(){
        $(this).animate({
            height: 100
        }, {
            queue:false,
            duration:velforanimations
        });
        $(this).animate({
            width: 100
        }, {
            queue:false,
            duration:velforanimations
        });
        //$(this).find('span').animate({"opacity":0.8}, velforanimations);
        $(this).animate({
            "opacity":1
        }, velforanimations);
    }
    function outMe(){
        $(this).animate({
            height: 100
        }, {
            queue:false,
            duration:velforanimations
        });
        $(this).animate({
            width: 100
        }, {
            queue:false,
            duration:velforanimations
        });
        $(this).find('span').animate({
            "opacity":0
        }, velforanimations);
        $(this).animate({
            "opacity":0.5
        }, velforanimations);
    }
    function normal(){
        $(this).find('span').css({
            "opacity":0
        });
        $(this).css({
            "opacity":0.5
        });
    }


    var defaults = {
        ulPadding:0,
        velocity: 1500,
        edges:100,
        delayToAutoSelect: 500, /* this value needs to be higher than the animations applied to selected item, since it´s values could change once loaded */
        debug: true,
        extendClick: clickMe,
        extendOver: overMe,
        extendOut: outMe,
        extendSelected: selectedMe,
        extendNormalState: normal
    }
    $("#easeMenu").easeMenu(defaults);
});