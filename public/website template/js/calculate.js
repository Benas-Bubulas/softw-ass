

    function GetMap()
    {
        
        var storeLocation = new Microsoft.Maps.Location(51.85075720513842, -8.479355109984628);
        var map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'An_Q32lMqBZqHGRAFk-OqLOfn1WCJD0Zi5DAp8A2wLBKJRKAu5qYgWh4awL25_d5',
            center: storeLocation,
            zoom: 13,
            disableScrollWheelZoom: true,
            disablePanning: true
        });
        
        
        //Create custom Pushpin
        var pin = new Microsoft.Maps.Pushpin(storeLocation, {
            title: 'Logitech Ireland',
            subTitle: 'Services Ltd',
            text: '1'
        });

        //Add the pushpin to the map
        map.entities.push(pin);
        

    }

function Multiply()
{
        num1 = document.getElementById("firstNumber").value;
        num2 = 10.00;
        var result = num1 * num2;
    document.getElementById("total").innerHTML = 'Total: €' + result;
    document.getElementById("number1").innerHTML = 'Quantity: ' + num1;
    

        num3 = document.getElementById("firstNumber2").value;
        num4 = 15.00;
        var result2 = num3 * num4;
    document.getElementById("total2").innerHTML = 'Total: €' + result2;
    document.getElementById("number2").innerHTML = 'Quantity: ' + num3;
    
        num5 = document.getElementById("firstNumber3").value;
        num6 = 10.00;
    var result3 = num5 * num6;
    document.getElementById("total3").innerHTML = 'Total: €' + result3;
    document.getElementById("number3").innerHTML = 'Quantity: ' + num5;
    
        num7 = document.getElementById("firstNumber4").value;
        num8 = 12.00;
    var result4 = num7 * num8;
    document.getElementById("total4").innerHTML = 'Total: €' + result4;
    document.getElementById("number4").innerHTML = 'Quantity: ' + num7;
    
        num9 = document.getElementById("firstNumber5").value;
        num10 = 5.00;
    var result5= num9 * num10;
    document.getElementById("total5").innerHTML = 'Total: €' + result5;
    document.getElementById("number5").innerHTML = 'Quantity: ' + num9;
    
    var shipping;
    var quantities = num1 + num3 + num5 + num7 + num9;

    
    var grandTotal = result + result2 + result3 + result4 + result5;
    if (grandTotal >= 100) {
        shipping = 0;
    }
    else {
        shipping = 20;
    }
    


    document.getElementById("GrandTotal").innerHTML = 'Total: €' + grandTotal + '<br> Shipping: €' + shipping + '<br> Grand Total: €' + (grandTotal + shipping);
}








    

