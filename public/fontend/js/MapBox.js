var map = new mapboxgl.Map({
    container: 'divMapId',
    center: [105.79930031798517, 21.02292215577198],
    zoom: 12
});
map.addControl(new mapboxgl.FullscreenControl());
var maps = new mapboxgl.ekmap.TiledOSMapLayer().addTo(map);
map.addControl(new mapboxgl.NavigationControl(), "bottom-right");
var popup;
toggleSidebar('left');
var divData = document.getElementById('listData');
$.get("http://localhost:8080/shopbanhanglaravel/public/fontend/js/dataFeature.json", function(response) {
    var data = response.features;
    data.forEach(items => {
        new mapboxgl.Marker({
                'color': 'red'
            }).setLngLat(items.geometry.coordinates)
            .addTo(map);
        var div = document.createElement('div');
        var div2 = document.createElement('div');
        div2.className = "kt-portlet item-container";
        div2.style.cursor = "pointer";
        div2.onclick = function() {
            map.flyTo({
                center: items.geometry.coordinates,
                zoom: items.geometry.zoom,
                bearing: items.geometry.bearing,
                pitch: items.geometry.pitch,
                speed: 1
            })
            if (popup)
                popup.remove();
            popup = new mapboxgl.Popup({ offset: 30, maxWidth: 500 })
                .setLngLat(items.geometry.coordinates)
                .setHTML("<h4>" + items.properties.title + "</h4>")
                .addTo(map)
        }

        div2.onmouseover = function() {
            if (popup)
                popup.remove();
            popup = new mapboxgl.Popup({ offset: 30, maxWidth: 500 })
                .setLngLat(items.geometry.coordinates)
                .setHTML("<h4>" + items.properties.title + "</h4>")
                .addTo(map)
        };

        var div3 = document.createElement('div');
        div3.className = "form-group form-group-last row";
        div.className = 'col item-name';
        var image = document.createElement('img');
        image.src = "http://gis.mapdrive.io/gserver/rest/services/icon/svg/map/pin29/25/00ffffff/ff0000";
        image.className = 'img_select';
        image.height = 20;
        var a = document.createElement('a');
        a.className = 'col-form-label';
        a.innerHTML = items.properties.title;
        a.href = "javascript:;";
        var div4 = document.createElement('div');
        div4.className = 'font-des';
        var frag = document.createRange().createContextualFragment(items.properties.description);
        div4.appendChild(frag);
        div.appendChild(image);
        div.appendChild(a)
        div.appendChild(div4)
        var div1 = document.createElement('div');
        div1.className = "item-image-container";
        var image1 = document.createElement('img');
        image1.src = items.properties.image;
        image1.className = 'item-image';
        div1.appendChild(image1);
        div3.appendChild(div);
        div3.appendChild(div1);
        div2.appendChild(div3);
        divData.appendChild(div2);

    });
})

function toggleSidebar(id) {
    var elem = document.getElementById(id);
    var classes = elem.className.split(' ');
    var collapsed = classes.indexOf('collapsed') !== -1;
    var padding = {};

    if (collapsed) {
        classes.splice(classes.indexOf('collapsed'), 1);
        padding[id] = 400;
        map.easeTo({
            padding: padding,
            duration: 1000
        });
    } else {
        padding[id] = 0;
        classes.push('collapsed');
        map.easeTo({
            padding: padding,
            duration: 1000
        });
    }
    elem.className = classes.join(' ');
}