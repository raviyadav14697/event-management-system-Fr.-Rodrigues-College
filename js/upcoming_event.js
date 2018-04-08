

    
   // var token = 'FKHUUNL37TLGUELSFIYV';        //personal aoth token
   // var $events = $("#events");
    //$.get('https://www.eventbriteapi.com/v3/events/search/?q=health&location.address=MUMBAI&location.within=100km&location.latitude=19.0463017&location.longitude=72.8928885&token=VBA5V2AD6TYRSUKRI3YW');



$(document).ready(function(){
            
            var lat=19.18;
            var lng = 72.56;
            // var events = $("#events");
	          // alert("hi");

             $.get('https://www.eventbriteapi.com/v3/events/search/?q=hackathon&location.address=MUMBAI&sort_by=distance&location.within=157km&location.latitude='+lat+'&location.longitude='+lng+'&token=VBA5V2AD6TYRSUKRI3YW', function(res) {
                    if(res.events.length) {
                        var out = '';
                        for(var i=0;i<res.events.length;i++) {
                            var event = res.events[i];
                            console.dir(event);
                            var ar = event.start.local.split('T');
                            out += '<div class="card col-md-4 cards" >';
                            //alert(event.url);
                            out += '<img class="card-img-top img-responsive" style="width: 300px; height: 300px;" src="'+event.logo.url+'" alt="Card image cap"><div class="card-body"><h1 class="card-title">'+event.name.text+
                            '</h1><p class="card-text"><h3>'+ar[0]+'<br/>'+ar[1]+'</h></p><a class=" btn btn-primary" href="'+event.url+'">More Details ...</a></div></div>';
                        }
                       //alert(event.venue.address.latitude+"   "+event.venue.address.longitude);
                        $("#add_here").html(out);
                    } else {
                        $("#add_here").html("<p>Sorry, there are no upcoming events.</p>");
                        //alert("sdf");
                    }
            });


             map();


     function map(){
            
    


        var FCRC = {lat: 19.044497, lng: 72.8182648};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: FCRC
        });
        var VES = {lat: 19.0472062, lng: 72.8886818};
        var KJ = {lat: 19.0480801, lng: 72.8714511};
        
        var TSEC = {lat: 19.0646936, lng: 72.8346362};
        var NSE = {lat: 19.0705164, lng: 72.8643453};
        
        var  t1 = "UnScript 2k18 - 27/03/18";
        var t1 = t1.bold();

        
        var marker1 = new google.maps.Marker({
          position: FCRC,
          map: map,
          title: 'UnScript 2k18 - 27/03/18'
        });
         var infowindow1 = new google.maps.InfoWindow({
          content: t1
        }); 
         marker1.addListener('click', function() {
          infowindow1.open(map, marker1);
        });
       
            var  t2 = 'TechTrix - 28/03/18';
            var t2 = t2.bold();
        
        
          
          var marker2 = new google.maps.Marker({
          position: VES,
          map: map,
          title: t2
        });
        
        var infowindow2 = new google.maps.InfoWindow({
          content: t2
        }); 
         marker2.addListener('click', function() {
          infowindow2.open(map, marker2);
        });
        
          var marker3 = new google.maps.Marker({
          position: KJ,
          map: map,
          title: 'CodeChamp - 27/03/18'
        });
        var infowindow3 = new google.maps.InfoWindow({
          content: 'CodeChamp - 27/03/18'.bold()
        }); 
         marker3.addListener('click', function() {
          infowindow3.open(map, marker3);
        });
      
          var marker4 = new google.maps.Marker({
          position: NSE,
          map: map,
          title: 'NSE FutureTech Hackothon Machine  Learning'
        });
        var infowindow4 = new google.maps.InfoWindow({
          content: 'NSE FutureTech Hackothon Machine  Learning  -30/04/18'.bold()
        }); 
         marker4.addListener('click', function() {
          infowindow4.open(map, marker4);
        });
     
      
          var marker5 = new google.maps.Marker({
          position: TSEC,
          map: map,
          title: 'Codeathon - Programming  Competition' 
        });
        var infowindow5 = new google.maps.InfoWindow({
          content: 'Codeathon Programming  Competition -8/05/18'.bold()
        }); 
         marker5.addListener('click', function() {
          infowindow5.open(map, marker5);
        });
     
     
        
      }
    

         


});
