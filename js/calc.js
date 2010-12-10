//Global Variable Total Emission
var totalEmission = 0;
var emissionResult = 0;
var energyEmission = 0;
var transportEmission = 0;
var foodEmission = 0;
var recycleEmission = 0;
var otherEmission = 0;


//****************************************************
// Energy
//
//
//****************************************************
//Onclick fuction Calc Light
$("#calcLight").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();    
    var Light_watt = $("#Light_watt").val();
    var Light_amount = $("#Light_amount").val();
    var Light_times = $("#Light_times").val();
    $.post("calcEnergy.php",{
        watt: Light_watt,
        amount: Light_amount ,
        times: Light_times
    },function(result){
        alert("Light");
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);        
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Air
$("#calcAir").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("Air");
    var Air_watt = $("#Air_watt").val();
    var Air_amount = $("#Air_amount").val();
    var Air_times = $("#Air_times").val();
    $.post("calcEnergy.php",{
        watt: Air_watt,
        amount: Air_amount ,
        times: Air_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc TV
$("#calcTV").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("TV");
    var TV_watt = $("#TV_watt").val();
    var TV_amount = $("#TV_amount").val();
    var TV_times = $("#TV_times").val();
    $.post("calcEnergy.php",{
        watt: TV_watt,
        amount: TV_amount ,
        times: TV_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Fan
$("#calcFan").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("Fan");
    var Fan_watt = $("#Fan_watt").val();
    var Fan_amount = $("#Fan_amount").val();
    var Fan_times = $("#Fan_times").val();
    $.post("calcEnergy.php",{
        watt: Fan_watt,
        amount: Fan_amount ,
        times: Fan_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Water Heater
$("#calcWHeater").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("WHeater");
    var WHeater_watt = $("#WHeater_watt").val();
    var WHeater_amount = $("#WHeater_amount").val();
    var WHeater_times = $("#WHeater_times").val();
    $.post("calcEnergy.php",{
        watt: WHeater_watt,
        amount: WHeater_amount ,
        times: WHeater_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Vacuum Bottle
$("#calcVBottle").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("VBottle");
    var VBottle_watt = $("#VBottle_watt").val();
    var VBottle_amount = $("#VBottle_amount").val();
    var VBottle_times = $("#VBottle_times").val();
    $.post("calcEnergy.php",{
        watt: VBottle_watt,
        amount: VBottle_amount ,
        times: VBottle_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Freezer
$("#calcFreezer").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("Freezer");
    var Freezer_watt = $("#Freezer_watt").val();
    var Freezer_amount = $("#Freezer_amount").val();
    var Freezer_times = $("#Freezer_times").val();
    $.post("calcEnergy.php",{
        watt: Freezer_watt,
        amount: Freezer_amount ,
        times: Freezer_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Computer
$("#calcCom").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("Computer");
    var Com_watt = $("#Com_watt").val();
    var Com_amount = $("#Com_amount").val();
    var Com_times = $("#Com_times").val();
    $.post("calcEnergy.php",{
        watt: Com_watt,
        amount: Com_amount ,
        times: Com_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Mobile Phone
$("#calcPhone").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("Mobile Phone");
    var Phone_watt = $("#Phone_watt").val();
    var Phone_amount = $("#Phone_amount").val();
    var Phone_times = $("#Phone_times").val();
    $.post("calcEnergy.php",{
        watt: Phone_watt,
        amount: Phone_amount ,
        times: Phone_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Microwave Oven
$("#calcOven").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert("Microwave Oven");
    var Oven_watt = $("#Oven_watt").val();
    var Oven_amount = $("#Oven_amount").val();
    var Oven_times = $("#Oven_times").val();
    $.post("calcEnergy.php",{
        watt: Oven_watt,
        amount: Oven_amount ,
        times: Oven_times
    },function(result){
        emissionResult = parseFloat(result);
        energyEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//****************************************************
// Food
//
//
//****************************************************
//Onclick fuction Calc Bus
$("#calcRice").click(function(){
    // load contact form onclick
    alert("Rice");
    var Rice_amount = $("#Rice_amount").val();
    var foodType = "rice";
    $.post("calcFood.php",{
        Rice_amount: Rice_amount,
        foodType: foodType
    },function(result){
        emissionResult = parseFloat(result);
        foodEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        alert(foodEmission);
        $("#displayEmission").html(emissionResult);
    });
});

//****************************************************
// Transport
//
//
//****************************************************
//Onclick fuction Calc Bus
$("#calcBus").click(function(){
    // load contact form onclick
    alert("Transport");
    var Km = $("#Bus_km").val();
    var times = $("#Bus_times").val();
    var vehicleType = "Bus";
    $.post("calcTrans.php",{
        Km: Km,
        times: times,
        vehicleType: vehicleType
    },function(result){
        emissionResult = parseFloat(result);
        transportEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        alert(transportEmission);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Private Car
$("#calcPCar").click(function(){
    // load contact form onclick
    alert("Transport");
    var Km = $("#PCar_km").val();
    var times = $("#PCar_times").val();
    var vehicleType = "PCar";
    $.post("calcTrans.php",{
        Km: Km,
        times: times,
        vehicleType: vehicleType
    },function(result){
        emissionResult = parseFloat(result);
        transportEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Taxi
$("#calcTaxi").click(function(){
    // load contact form onclick
    alert("Transport");
    var Km = $("#Taxi_km").val();
    var times = $("#Taxi_times").val();
    var vehicleType = "Taxi";
    $.post("calcTrans.php",{
        Km: Km,
        times: times,
        vehicleType: vehicleType
    },function(result){
        emissionResult = parseFloat(result);
        transportEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Motocycle
$("#calcMoto").click(function(){
    // load contact form onclick
    alert("Transport");
    var Km = $("#Moto_km").val();
    var times = $("#Moto_times").val();
    var vehicleType = "Moto";
    $.post("calcTrans.php",{
        Km: Km,
        times: times,
        vehicleType: vehicleType
    },function(result){
        emissionResult = parseFloat(result);
        transportEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Van
$("#calcVan").click(function(){
    // load contact form onclick
    alert("Transport");
    var Km = $("#Van_km").val();
    var times = $("#Van_times").val();
    var vehicleType = "Van";
    $.post("calcTrans.php",{
        Km: Km,
        times: times,
        vehicleType: vehicleType
    },function(result){
        emissionResult = parseFloat(result);
        transportEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//Onclick fuction Calc Private Car
$("#calcRail").click(function(){
    // load contact form onclick
    alert("Rail");
    var Km = $("#Rail_km").val();
    var times = $("#Rail_times").val();
    var vehicleType = "Moto";
    $.post("calcTrans.php",{
        Km: Km,
        times: times,
        vehicleType: vehicleType
    },function(result){
        emissionResult = parseFloat(result);
        transportEmission += parseFloat(emissionResult);
        //$("#result2").html(emissionResult);
        $("#displayEmission").html(emissionResult);
    });
});

//****************************************************
// Create Pie Graph 
//
//
//****************************************************

//Onclick fuction Create Pie Graph
$("#result_piegraph").click(function(){
    // load contact form onclick
    //var htmlStr = $(".watt").html();
    alert(transportEmission);
    //alert(energyEmission);
    //energyEmission = 20;
    //energyEmission += parseFloat(energyEmission);
    //$("#energyGraph").html(energyEmission);
    $("#energyGraph").text(parseFloat(energyEmission));
    $("#foodGraph").text(parseFloat(foodEmission));
    $("#transportGraph").text(parseFloat(transportEmission));
    $("#recycleGraph").text(parseFloat(recycleEmission));
    $("#otherGraph").text(parseFloat(otherEmission));
    

    //**********************************************************
    // Function Create Pie Graph
    // Run When Click Tap Result(Pie Graph)
    //**********************************************************

    // Run the code when the DOM is ready
    $( pieChart );

    function pieChart() {

        // Config settings
        var chartSizePercent = 45;                        // The chart radius relative to the canvas width/height (in percent)
        var sliceBorderWidth = 1;                         // Width (in pixels) of the border around each slice
        var sliceBorderStyle = "#fff";                    // Colour of the border around each slice
        var sliceGradientColour = "#ddd";                 // Colour to use for one end of the chart gradient
        var maxPullOutDistance = 25;                      // How far, in pixels, to pull slices out when clicked
        var pullOutFrameStep = 4;                         // How many pixels to move a slice with each animation frame
        var pullOutFrameInterval = 40;                    // How long (in ms) between each animation frame
        var pullOutLabelPadding = 65;                     // Padding between pulled-out slice and its label
        var pullOutLabelFont = "bold 16px 'Trebuchet MS', Verdana, sans-serif";  // Pull-out slice label font
        var pullOutValueFont = "bold 12px 'Trebuchet MS', Verdana, sans-serif";  // Pull-out slice value font
        var pullOutValuePrefix = "$";                     // Pull-out slice value prefix
        var pullOutShadowColour = "rgba( 0, 0, 0, .5 )";  // Colour to use for the pull-out slice shadow
        var pullOutShadowOffsetX = 5;                     // X-offset (in pixels) of the pull-out slice shadow
        var pullOutShadowOffsetY = 5;                     // Y-offset (in pixels) of the pull-out slice shadow
        var pullOutShadowBlur = 5;                        // How much to blur the pull-out slice shadow
        var pullOutBorderWidth = 2;                       // Width (in pixels) of the pull-out slice border
        var pullOutBorderStyle = "#333";                  // Colour of the pull-out slice border
        var chartStartAngle = -.5 * Math.PI;              // Start the chart at 12 o'clock instead of 3 o'clock

        // Declare some variables for the chart
        var canvas;                       // The canvas element in the page
        var currentPullOutSlice = -1;     // The slice currently pulled out (-1 = no slice)
        var currentPullOutDistance = 0;   // How many pixels the pulled-out slice is currently pulled out in the animation
        var animationId = 0;              // Tracks the interval ID for the animation created by setInterval()
        var chartData = [];               // Chart data (labels, values, and angles)
        var chartColours = [];            // Chart colours (pulled from the HTML table)
        var totalValue = 0;               // Total of all the values in the chart
        var canvasWidth;                  // Width of the canvas, in pixels
        var canvasHeight;                 // Height of the canvas, in pixels
        var centreX;                      // X-coordinate of centre of the canvas/chart
        var centreY;                      // Y-coordinate of centre of the canvas/chart
        var chartRadius;                  // Radius of the pie chart, in pixels

        // Set things up and draw the chart
        init();


        /**
   * Set up the chart data and colours, as well as the chart and table click handlers,
   * and draw the initial pie chart
   */

        function init() {

            // Get the canvas element in the page
            canvas = document.getElementById('chart');

            // Exit if the browser isn't canvas-capable
            if ( typeof canvas.getContext === 'undefined' ) return;

            // Initialise some properties of the canvas and chart
            canvasWidth = canvas.width;
            canvasHeight = canvas.height;
            centreX = canvasWidth / 2;
            centreY = canvasHeight / 2;
            chartRadius = Math.min( canvasWidth, canvasHeight ) / 2 * ( chartSizePercent / 100 );

            // Grab the data from the table,
            // and assign click handlers to the table data cells

            var currentRow = -1;
            var currentCell = 0;

            $('#chartData td').each( function() {
                currentCell++;
                if ( currentCell % 2 != 0 ) {
                    currentRow++;
                    chartData[currentRow] = [];
                    chartData[currentRow]['label'] = $(this).text();
                } else {
                    var value = parseFloat($(this).text());
                    totalValue += value;
                    value = value.toFixed(2);
                    chartData[currentRow]['value'] = value;
                }

                // Store the slice index in this cell, and attach a click handler to it
                $(this).data( 'slice', currentRow );
                $(this).click( handleTableClick );

                // Extract and store the cell colour
                if ( rgb = $(this).css('color').match( /rgb\((\d+), (\d+), (\d+)/) ) {
                    chartColours[currentRow] = [ rgb[1], rgb[2], rgb[3] ];
                } else if ( hex = $(this).css('color').match(/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/) ) {
                    chartColours[currentRow] = [ parseInt(hex[1],16) ,parseInt(hex[2],16), parseInt(hex[3], 16) ];
                } else {
                    alert( "Error: Colour could not be determined! Please specify table colours using the format '#xxxxxx'" );
                    return;
                }

            } );

            // Now compute and store the start and end angles of each slice in the chart data

            var currentPos = 0; // The current position of the slice in the pie (from 0 to 1)

            for ( var slice in chartData ) {
                chartData[slice]['startAngle'] = 2 * Math.PI * currentPos;
                chartData[slice]['endAngle'] = 2 * Math.PI * ( currentPos + ( chartData[slice]['value'] / totalValue ) );
                currentPos += chartData[slice]['value'] / totalValue;
            }

            // All ready! Now draw the pie chart, and add the click handler to it
            drawChart();
            $('#chart').click ( handleChartClick );
        }


        /**
   * Process mouse clicks in the chart area.
   *
   * If a slice was clicked, toggle it in or out.
   * If the user clicked outside the pie, push any slices back in.
   *
   * @param Event The click event
   */

        function handleChartClick ( clickEvent ) {

            // Get the mouse cursor position at the time of the click, relative to the canvas
            var mouseX = clickEvent.pageX - this.offsetLeft;
            var mouseY = clickEvent.pageY - this.offsetTop;

            // Was the click inside the pie chart?
            var xFromCentre = mouseX - centreX;
            var yFromCentre = mouseY - centreY;
            var distanceFromCentre = Math.sqrt( Math.pow( Math.abs( xFromCentre ), 2 ) + Math.pow( Math.abs( yFromCentre ), 2 ) );

            if ( distanceFromCentre <= chartRadius ) {

                // Yes, the click was inside the chart.
                // Find the slice that was clicked by comparing angles relative to the chart centre.

                var clickAngle = Math.atan2( yFromCentre, xFromCentre ) - chartStartAngle;
                if ( clickAngle < 0 ) clickAngle = 2 * Math.PI + clickAngle;

                for ( var slice in chartData ) {
                    if ( clickAngle >= chartData[slice]['startAngle'] && clickAngle <= chartData[slice]['endAngle'] ) {

                        // Slice found. Pull it out or push it in, as required.
                        toggleSlice ( slice );
                        return;
                    }
                }
            }

            // User must have clicked outside the pie. Push any pulled-out slice back in.
            pushIn();
        }


        /**
   * Process mouse clicks in the table area.
   *
   * Retrieve the slice number from the jQuery data stored in the
   * clicked table cell, then toggle the slice
   *
   * @param Event The click event
   */

        function handleTableClick ( clickEvent ) {
            var slice = $(this).data('slice');
            toggleSlice ( slice );
        }


        /**
   * Push a slice in or out.
   *
   * If it's already pulled out, push it in. Otherwise, pull it out.
   *
   * @param Number The slice index (between 0 and the number of slices - 1)
   */

        function toggleSlice ( slice ) {
            if ( slice == currentPullOutSlice ) {
                pushIn();
            } else {
                startPullOut ( slice );
            }
        }


        /**
   * Start pulling a slice out from the pie.
   *
   * @param Number The slice index (between 0 and the number of slices - 1)
   */

        function startPullOut ( slice ) {

            // Exit if we're already pulling out this slice
            if ( currentPullOutSlice == slice ) return;

            // Record the slice that we're pulling out, clear any previous animation, then start the animation
            currentPullOutSlice = slice;
            currentPullOutDistance = 0;
            clearInterval( animationId );
            animationId = setInterval( function() {
                animatePullOut( slice );
            }, pullOutFrameInterval );

            // Highlight the corresponding row in the key table
            $('#chartData td').removeClass('highlight');
            var labelCell = $('#chartData td:eq(' + (slice*2) + ')');
            var valueCell = $('#chartData td:eq(' + (slice*2+1) + ')');
            labelCell.addClass('highlight');
            valueCell.addClass('highlight');
        }


        /**
   * Draw a frame of the pull-out animation.
   *
   * @param Number The index of the slice being pulled out
   */

        function animatePullOut ( slice ) {

            // Pull the slice out some more
            currentPullOutDistance += pullOutFrameStep;

            // If we've pulled it right out, stop animating
            if ( currentPullOutDistance >= maxPullOutDistance ) {
                clearInterval( animationId );
                return;
            }

            // Draw the frame
            drawChart();
        }


        /**
   * Push any pulled-out slice back in.
   *
   * Resets the animation variables and redraws the chart.
   * Also un-highlights all rows in the table.
   */

        function pushIn() {
            currentPullOutSlice = -1;
            currentPullOutDistance = 0;
            clearInterval( animationId );
            drawChart();
            $('#chartData td').removeClass('highlight');
        }


        /**
   * Draw the chart.
   *
   * Loop through each slice of the pie, and draw it.
   */

        function drawChart() {

            // Get a drawing context
            var context = canvas.getContext('2d');

            // Clear the canvas, ready for the new frame
            context.clearRect ( 0, 0, canvasWidth, canvasHeight );

            // Draw each slice of the chart, skipping the pull-out slice (if any)
            for ( var slice in chartData ) {
                if ( slice != currentPullOutSlice ) drawSlice( context, slice );
            }

            // If there's a pull-out slice in effect, draw it.
            // (We draw the pull-out slice last so its drop shadow doesn't get painted over.)
            if ( currentPullOutSlice != -1 ) drawSlice( context, currentPullOutSlice );
        }


        /**
   * Draw an individual slice in the chart.
   *
   * @param Context A canvas context to draw on
   * @param Number The index of the slice to draw
   */

        function drawSlice ( context, slice ) {

            // Compute the adjusted start and end angles for the slice
            var startAngle = chartData[slice]['startAngle']  + chartStartAngle;
            var endAngle = chartData[slice]['endAngle']  + chartStartAngle;

            if ( slice == currentPullOutSlice ) {

                // We're pulling (or have pulled) this slice out.
                // Offset it from the pie centre, draw the text label,
                // and add a drop shadow.

                var midAngle = (startAngle + endAngle) / 2;
                var actualPullOutDistance = currentPullOutDistance * easeOut( currentPullOutDistance/maxPullOutDistance, .8 );
                startX = centreX + Math.cos(midAngle) * actualPullOutDistance;
                startY = centreY + Math.sin(midAngle) * actualPullOutDistance;
                context.fillStyle = 'rgb(' + chartColours[slice].join(',') + ')';
                context.textAlign = "center";
                context.font = pullOutLabelFont;
                context.fillText( chartData[slice]['label'], centreX + Math.cos(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ), centreY + Math.sin(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ) );
                context.font = pullOutValueFont;
                context.fillText( pullOutValuePrefix + chartData[slice]['value'] + " (" + ( parseInt( chartData[slice]['value'] / totalValue * 100 + .5 ) ) +  "%)", centreX + Math.cos(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ), centreY + Math.sin(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ) + 20 );
                context.shadowOffsetX = pullOutShadowOffsetX;
                context.shadowOffsetY = pullOutShadowOffsetY;
                context.shadowBlur = pullOutShadowBlur;

            } else {

                // This slice isn't pulled out, so draw it from the pie centre
                startX = centreX;
                startY = centreY;
            }

            // Set up the gradient fill for the slice
            var sliceGradient = context.createLinearGradient( 0, 0, canvasWidth*.75, canvasHeight*.75 );
            sliceGradient.addColorStop( 0, sliceGradientColour );
            sliceGradient.addColorStop( 1, 'rgb(' + chartColours[slice].join(',') + ')' );

            // Draw the slice
            context.beginPath();
            context.moveTo( startX, startY );
            context.arc( startX, startY, chartRadius, startAngle, endAngle, false );
            context.lineTo( startX, startY );
            context.closePath();
            context.fillStyle = sliceGradient;
            context.shadowColor = ( slice == currentPullOutSlice ) ? pullOutShadowColour : "rgba( 0, 0, 0, 0 )";
            context.fill();
            context.shadowColor = "rgba( 0, 0, 0, 0 )";

            // Style the slice border appropriately
            if ( slice == currentPullOutSlice ) {
                context.lineWidth = pullOutBorderWidth;
                context.strokeStyle = pullOutBorderStyle;
            } else {
                context.lineWidth = sliceBorderWidth;
                context.strokeStyle = sliceBorderStyle;
            }

            // Draw the slice border
            context.stroke();
        }


        /**
   * Easing function.
   *
   * A bit hacky but it seems to work! (Note to self: Re-read my school maths books sometime)
   *
   * @param Number The ratio of the current distance travelled to the maximum distance
   * @param Number The power (higher numbers = more gradual easing)
   * @return Number The new ratio
   */

        function easeOut( ratio, power ) {
            return ( Math.pow ( 1 - ratio, power ) + 1 );
        }

    };

});

//****************************************************
// Collect result into database
//
//
//****************************************************
//Onclick fuction Collect result
$("#collect").click(function(){
    // load contact form onclick
    alert("collect3");
    //totalEmission = 100;    
    alert(usr);
    $.post("collect.php",{        
        totalEmission: totalEmission,
        energyEmission: energyEmission,
        transportEmission: transportEmission,
        foodEmission: foodEmission,
        recycleEmission: recycleEmission,
        otherEmission: otherEmission        
    },function(result){
        alert("totalEmission");
        alert(result);
    });
});