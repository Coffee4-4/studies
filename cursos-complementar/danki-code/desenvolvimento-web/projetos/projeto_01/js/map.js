$(function(){

    var map;

    function initialize() {
        //propriedades do map
        var mapProp = {
            //coordenadas
            center:new google.maps.LatLng(-22.8821912,-49.2383956),
            zoom:14,
            scrollwheel: false,
            styles: [{
                stylers: [{
                    saturation: -100
                }]
            }],
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        // elemento onde o mapa sera inserido
        map=new google.maps.Map(document.getElementById("map"),mapProp);
    }
    //adicionar pontos no mapa
    function addMarker(lat,long,icon,content,showInfoWindow,openInfoWindow){
        var myLatLng = {lat:lat,lng:long};

        if(icon === ''){
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon:icon
            });
        }else{
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon:icon
            });
        }

        var infoWindow = new google.maps.InfoWindow({
            content: content,
            maxWidth:200
        });

        google.maps.event.addListener(infoWindow, 'domready', function() {

            // Reference to the DIV which receives the contents of the infowindow using jQuery
            var iwOuter = $('.gm-style-iw');

            /* The DIV we want to change is above the .gm-style-iw DIV.
             * So, we use jQuery and create a iwBackground variable,
             * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
             */
            var iwBackground = iwOuter.prev();

            // Remove the background shadow DIV
            iwBackground.children(':nth-child(2)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});

            // Remove the white background DIV
            iwBackground.children(':nth-child(4)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});

            // Moves the shadow of the arrow 76px to the left margin
            iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'display:none;'});

            // Moves the arrow 76px to the left margin
            iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'display:none;'});

        });

        //evento de click retorna texto
        if(showInfoWindow == undefined){
            google.maps.event.addListener(marker, 'click', function () {
                infoWindow.open(map, marker);
            });
        }else if(openInfoWindow == true){
            infoWindow.open(map, marker);
        }
    }



    initialize();
    addMarker(-22.8821912,-49.2383956,'',"Minha casa",undefined,false);





})