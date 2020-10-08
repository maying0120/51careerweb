	lodataset = {
		location:{
            country:[],
            state:[],
            city:[]	
        }

	}

	new Vue({
		delimiters: ['${', '}'],
			el: '#location123',
			data: lodataset
	})
	getCountry();
								


function getCountry(){
    $.ajax({
       type:'post',
       url:'https://geodata.solutions/restapi',
       crossDomain: true,
       dataType:'jsonp',
       success:function(data){
        alert(data.getOwnPropertyNames());
          lodataset.location.country[0]= data.getOwnPropertyNames().country_code;
          lodataset.location.country[1]= data.getOwnPropertyNames().country_name;
       },
       error: function(errorThrown) { console.log(errorThrown) }
    });
 }




