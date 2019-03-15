

    // Maps

    var map;
        $(document).ready(function(){
            map = new GMaps({
                el: '#map',
                lat:0.0405544,
                lng: -51.0771221,
                zoomControl : false,
                zoomControlOpt: {
                style : 'SMALL',
                position: 'TOP_LEFT'
            },
            panControl : false,
            streetViewControl : false,
            mapTypeControl: false,
            scrollwheel: false,
            zoom:17,
            overviewMapControl: false
        });
        map.addMarker({
            lat:0.0405544,
            lng: -51.0771221,
            title: 'Custódia Legal', 
        });
    });
