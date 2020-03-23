function makePopupText(name) {
    var str = "Station: " + name + "<br/>";
    return(str);
}



$(function () {
    var unespLayer = L.layerGroup();
    var unespLayer_inactive = L.layerGroup();
    var map = L.map('stations-network-map').setView([-14, -50], 4);

    var ctrl = L.control.layers(null, null, {
        collapsed: false,
        position: "bottomright"
    }).addTo(map);

    L.control.scale().addTo(map);


    //Extend the Default marker class
    var CustomIcon = L.Icon.Default.extend({});
    var activeIcon = new CustomIcon({iconUrl: 'marker-icon-unesp.png'});
    var inactiveIcon = new CustomIcon({iconUrl: 'marker-icon-unesp-inactive.png'});


    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    

    
    L.marker([-3.73622377631604, -38.7248446435771], {icon: activeIcon}).bindPopup(makePopupText("FRTZ")).addTo(unespLayer);
    L.marker([-22.3185476433, -46.3281137524], {icon: activeIcon}).bindPopup(makePopupText("INCO")).addTo(unespLayer);
    L.marker([-22.4011630082, -41.8081779499], {icon: activeIcon}).bindPopup(makePopupText("MAC3")).addTo(unespLayer);
    L.marker([-10.1996492984, -48.3112986651], {icon: activeIcon}).bindPopup(makePopupText("PALM")).addTo(unespLayer);
    L.marker([-30.0738962096, -51.1196833913], {icon: activeIcon}).bindPopup(makePopupText("POAL")).addTo(unespLayer);
    L.marker([-22.122037729, -51.4070792689], {icon: activeIcon}).bindPopup(makePopupText("PRU2")).addTo(unespLayer);
    L.marker([-22.12008136, -51.40852631], {icon: activeIcon}).bindPopup(makePopupText("PRU4")).addTo(unespLayer);
    L.marker([-23.207529635, -45.8597407608], {icon: activeIcon}).bindPopup(makePopupText("SJCE")).addTo(unespLayer);
    L.marker([-23.2105893302, -45.9565919344], {icon: activeIcon}).bindPopup(makePopupText("SJCU")).addTo(unespLayer);
    L.marker([-2.5934639609, -44.2122901962], {icon: activeIcon}).bindPopup(makePopupText("SLMA")).addTo(unespLayer);
    L.marker([-18.72402664, -47.523798], {icon: activeIcon}).bindPopup(makePopupText("STMC")).addTo(unespLayer);
    L.marker([-5.840585, -35.196217], {icon: activeIcon}).bindPopup(makePopupText("STNT")).addTo(unespLayer);
    L.marker([-11.82939378, -55.54469158], {icon: activeIcon}).bindPopup(makePopupText("STSN")).addTo(unespLayer);
    L.marker([-3.377922583, -64.72432644], {icon: activeIcon}).bindPopup(makePopupText("STTF")).addTo(unespLayer);
    L.marker([-12.999826203, -38.510658583], {icon: activeIcon}).bindPopup(makePopupText("UFBA")).addTo(unespLayer);


     L.marker([-22.12150626744,-51.4160693333], {icon: inactiveIcon}).bindPopup(makePopupText("GALH")).addTo(unespLayer_inactive);
     L.marker([-22.3768158914,-41.791385419], {icon: inactiveIcon}).bindPopup(makePopupText("MAC2")).addTo(unespLayer_inactive);
     L.marker([-22.4149363947,-41.8621139972], {icon: inactiveIcon}).bindPopup(makePopupText("MACA")).addTo(unespLayer_inactive);
     L.marker([-3.0918800116,-60.0172631389], {icon: inactiveIcon}).bindPopup(makePopupText("MAN2")).addTo(unespLayer_inactive);
     L.marker([-3.1101796016,-59.9749042056], {icon: inactiveIcon}).bindPopup(makePopupText("MAN3")).addTo(unespLayer_inactive);
     L.marker([-3.1198253988,-60.0071672366], {icon: inactiveIcon}).bindPopup(makePopupText("MANA")).addTo(unespLayer_inactive);
     L.marker([-22.12767395248,-51.4133011805], {icon: inactiveIcon}).bindPopup(makePopupText("MORU")).addTo(unespLayer_inactive);
     L.marker([-22.1200455489,-51.4086717495], {icon: inactiveIcon}).bindPopup(makePopupText("PRU1")).addTo(unespLayer_inactive);
     L.marker([-22.1190862,-51.40603665], {icon: inactiveIcon}).bindPopup(makePopupText("PRU3")).addTo(unespLayer_inactive);
     L.marker([-23.2075277844,-45.8597434163], {icon: inactiveIcon}).bindPopup(makePopupText("SJCI")).addTo(unespLayer_inactive); 


    map.addLayer(unespLayer_inactive);
    ctrl.addOverlay(unespLayer_inactive, "<img src='javascript/lib/leaflet/images/marker-icon-unesp-inactive.png'> Station (inactive)");
    map.addLayer(unespLayer);
    ctrl.addOverlay(unespLayer, "<img src='javascript/lib/leaflet/images/marker-icon-unesp.png'> Station (active)");
});