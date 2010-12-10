/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    // load index page when the page loads
    $("#energy2w").load("energy.html");
    $("#icon_energy").click(function(){
        // load home page on click
        $("#content").load("energy.php");
    });
    $("#icon_transport").click(function(){
        // load about page on click
        $("#content").load("transport.php");
    });
    $("#icon_food").click(function(){
        // load about page on click
        $("#content").load("food.php");
    });
    $("#icon_recycle").click(function(){
        // load about page on click
        $("#content").load("recycle.php");
    });
    $("#icon_other").click(function(){
        // load about page on click
        $("#content").load("other.php");
    });
    $("#icon_result2").click(function(){
        // load about page on click
        $("#content").load("result.php");
    });
    $("#contact").click(function(){
        // load contact form onclick
        $("#response").load("contact.php");
    });
    $("#icon_result").click(function(){
        // load contact form onclick
        //alert("Result");
        $("#content").load("pieGraph.php");
    });
});
