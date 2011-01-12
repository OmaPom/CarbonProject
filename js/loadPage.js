/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    // load index page when the page loads   
    $("#left_menu_offset").click(function(){
        // load contact form onclick
        //alert("Result");
        $("#content").load("offset.php");
    });    
});
