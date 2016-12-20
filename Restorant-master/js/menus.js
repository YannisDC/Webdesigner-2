$( document ).ready(function() {
    var menuBlock = $('.menu-block');
    var menuItems = $('.menu-items');

    $.get("http://localhost:8888/Restorant-master/menu.json", function(data, status) {
      for (var i = 0; i < data.menu.length; i++) {
        // var image = $(menuItem[i]).find('img');
        // image.attr("src",data.menu[i].image);
        //
        // var description = $(menuItem[i]).find('p');
        // description.html(data.menu[i].name);

        var menuItem ='<div class="col-xs-12 col-md-4 menu-item">'+
                      '<div class="row">'+
                      '<img src="'+data.menu[i].image+'" class="menu-image">'+
                      '</div>'+
                      '<div class="row">'+
                      '<p>'+data.menu[i].name+'</p>'
                      '</div>'+
                      '</div>';

        menuItems.append(menuItem);
      }
    })

});
