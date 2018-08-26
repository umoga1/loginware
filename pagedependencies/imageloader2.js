var baseurl = app_url;
var requests = new Array();
var z=0;

$(document).ready(function() {

    //$('.postimage').on('load', function(img){ // image ready
    var img = $('.postimage:eq(0)');
//    img.css('background-image','url(https://i.pinimg.com/736x/31/74/48/3174480c49cee70bd03627255f136b83--fat-girls-girls-hbo.jpg)');
//    console.log(img);
    for(i=0; i<img.length; i++){
    var id = img[i].id;
//    console.log(id);
	var url = img[i].attributes.alt.value;
//    console.log("url " + url);
		//scrapeImage(id, "https://www.oodaloop.com/");
		getImage(id,url);
				
    }
  
});


function getImage(image_id,url){
	
	var urll=baseurl+'subpages/imageloader.jsp?url='+url;
	z++;
	requests[z] = $.ajax({ type: "GET",
	url:urll,
	async: true,
	success : function(data)
	{
//		console.log("data:"+data);
		var meta = data.split('meta property="og:image"');//$(data).find("meta");//.attr("content");
		var meta2 = data.split('twitter:image:src');
		//var meta2 = $(data).find("twitter:image:src");//.attr("content");
		
		//console.log(meta2);
		if(meta.length>1){
			var det = meta[1].split(">");
			det = det[0].replace("content=","");
			//det = det.replace('>',"");
  		    det = det.replace(' /',"");
			if(det!="https://i.pinimg.com/736x/31/74/48/3174480c49cee70bd03627255f136b83--fat-girls-girls-hbo.jpg" ){	
				imgsrc = det;
				imgcontainer = $("#"+image_id)
				console.log(det)
//				$("."+image_id).html('<img class="card-img-top pt30 pb30" src="'+det+'"  />');
//				$("#"+image_id).remove();
//				console.log("ade")
			$("#"+image_id).css('background-image','url('+det+')');
			
				
				return false;
			}
		}
		else if(meta2.length>1){
			var det2 = meta2[1].split(">");
			det2 = det2[0].replace("content=","");
			//det2 = det2.replace('>',"");
//			det2 = det2.replace('"',"");
			det2 = det2.replace(' /',"");
//			console.log(det2);
			
			if(det2!="https://i.pinimg.com/736x/31/74/48/3174480c49cee70bd03627255f136b83--fat-girls-girls-hbo.jpg" ){	
				imgsrc = det2;
				imgcontainer = $("#"+image_id)
//				$("."+image_id).html('<img class="card-img-top pt30 pb30" src="'+det+'"  />');
//				$("#"+image_id).remove();
//				console.log("adek")
			$("#"+image_id).css('background-image','url('+det2+')');
	//	$("."+image_id).html('<img class="card-img-top pt30 pb30" src="'+det2+'"  />');
//				$("#"+image_id).remove();
//				$("#"+image_id).css('background-image','url("'+det2+'")');
				return false;
			}
		}
		else{
			// remove image if no image
//			console.log("ashjsd");
			$("#"+image_id).remove();
			return false;
		}
	
		
	}
	});

	return false;		
	
	
	
	
// old code
	
//	var urll=baseurl+'subpages/imageloader.jsp?url='+url;
//	var prev = $("#"+image_id).css('background-image');
////	console.log(prev)
//	if(prev=="none"){
//		$("#"+image_id).css('background-image','url(https://i.pinimg.com/736x/31/74/48/3174480c49cee70bd03627255f136b83--fat-girls-girls-hbo.jpg)');
//		z++;
//		requests[z] = $.ajax({ type: "GET",
//		url:urll,
//		async: true,
//		success : function(data)
//		{
//			
//			var meta = $(data).find('meta');//.attr("content");
//			for(i=0; i<meta.length; i++){
//				if(meta[i].name=="twitter:image" ){
//					$("#"+image_id).css('background-image','url('+meta[i].content+')');
//					return false;
//				}else{
//				
//				var html = meta[i].outerHTML;
//					var og = html.indexOf('property="og:image"');
//					if(og>-1){
//						var con = html.split("content=");
//						if(con.length>1){
//							content =  con[1].split('"');	
//							
//							$("#"+image_id).css('background-image','url('+content[1]+')');
//							return false;
//						}
//					}else{
//						var nurl = extractRootDomain(url);
//						var pre = "";
//						if(url.indexOf("https")>-1){
//							pre = "https://";
//						}else{
//							pre = "http://";
//						}
//						
//						if(url.indexOf("www")>-1){
//							pre += "www.";
//						}else{
//							pre += "";
//						}
//						
//						nurl = pre+""+nurl;
////						console.log(nurl);
//						scrapeImage(image_id, nurl)
//					}
//				}
//			}
//		
//		}
//	});
//}
//	return false;
}

function scrapeImage(image_id, url){	
	var prev = $("#"+image_id).css('background-image');
	if(prev=="none"){
		$("#"+image_id).css('background-image','url(https://i.pinimg.com/736x/31/74/48/3174480c49cee70bd03627255f136b83--fat-girls-girls-hbo.jpg)');
		
	z++;
	var urll=baseurl+'subpages/imageloader.jsp?url='+url;
		requests[z] = $.ajax({ type: "GET",
		url:urll,
		async: true,
		success : function(data)
		{
			
			var meta = $(data).find('meta');//.attr("content");
			for(i=0; i<meta.length; i++){
				if(meta[i].name=="twitter:image" ){
					$("#"+image_id).css('background-image','url('+meta[i].content+')');
					return false;
				}else{
				
				var html = meta[i].outerHTML;
					var og = html.indexOf('property="og:image"');
					if(og>-1){
						var con = html.split("content=");
						if(con.length>1){
							content =  con[1].split('"');						
							$("#"+image_id).css('background-image','url('+content[1]+')');
							return false;
						}
					}
				}
			}
		
		}
	});
	}
	return false;		
}


function extractHostname(url) {
    var hostname;
    //find & remove protocol (http, ftp, etc.) and get hostname

    if (url.indexOf("://") > -1) {
        hostname = url.split('/')[2];
    }
    else {
        hostname = url.split('/')[0];
    }

    //find & remove port number
    hostname = hostname.split(':')[0];
    //find & remove "?"
    hostname = hostname.split('?')[0];

    return hostname;
}

//To address those who want the "root domain," use this function:
function extractRootDomain(url) {
    var domain = extractHostname(url),
        splitArr = domain.split('.'),
        arrLen = splitArr.length;

    //extracting the root domain here
    //if there is a subdomain 
    if (arrLen > 2) {
        domain = splitArr[arrLen - 2] + '.' + splitArr[arrLen - 1];
        //check to see if it's using a Country Code Top Level Domain (ccTLD) (i.e. ".me.uk")
        if (splitArr[arrLen - 2].length == 2 && splitArr[arrLen - 1].length == 2) {
            //this is using a ccTLD
            domain = splitArr[arrLen - 3] + '.' + domain;
        }
    }
    return domain;
}