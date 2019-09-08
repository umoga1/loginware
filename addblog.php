<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blogtrackers - Add New Blog to Track</title>
  <link rel="shortcut icon" href="images/favicons/favicon-48x48.png">
  <link rel="apple-touch-icon" href="images/favicons/favicon-48x48.png">
  <link rel="apple-touch-icon" sizes="96x96" href="images/favicons/favicon-96x96.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/favicon-144x144.png">
  <!-- start of bootsrap -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.css"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.css" />
  <link rel="stylesheet" href="assets/fonts/iconic/css/open-iconic.css" />
 <link rel="stylesheet" href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" />
 <link rel="stylesheet" href="assets/css/table.css" />
 <link rel="stylesheet" href="assets/vendors/DataTables/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="assets/vendors/DataTables/Buttons-1.5.1/css/buttons.dataTables.min.css" />
<link rel="stylesheet" href="assets/css/daterangepicker.css" />

  <link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/toastr.css">
  <!--end of bootsrap -->
  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/popper.min.js" ></script>
<script src="pagedependencies/googletagmanagerscript.js"></script>
</head>
<body class="bgwhite">

   <div class="modal-notifications">
<div class="row">
<div class="col-lg-10 closesection">
	
	</div>
  <div class="col-lg-2 col-md-12 notificationpanel">
    <div id="closeicon" class="cursor-pointer"><i class="fas fa-times-circle"></i></div>
  <div class="profilesection col-md-12 mt50">
  
  
  <a class="cursor-pointer profilemenulink" href="<%=request.getContextPath()%>/login"><h6 class="text-primary">Login</h6></a>
  

  </div>
  </div>
</div>
</div>

  <nav class="navbar navbar-inverse bg-primary">
    <div class="container-fluid mt10 mb10">

      <div class="navbar-header d-none d-lg-inline-flex d-xl-inline-flex  col-lg-3">
     <a class="navbar-brand text-center logohomeothers" href="./">
  </a>
      </div>
      <!-- Mobile Menu -->
      <nav class="navbar navbar-dark bg-primary float-left d-md-block d-sm-block d-xs-block d-lg-none d-xl-none" id="menutoggle">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      </nav>
      <!-- <div class="navbar-header ">
      <a class="navbar-brand text-center" href="#"><img src="images/blogtrackers.png" /></a>
      </div> -->
      <!-- Mobile menu  -->
      <div class="col-lg-6 themainmenu"  align="center">
        <ul class="nav main-menu2" style="display:inline-flex; display:-webkit-inline-flex; display:-mozkit-inline-flex;">
           <li><a class="bold-text" href="<%=request.getContextPath()%>/blogbrowser.jsp"><i class="homeicon"></i> <b class="bold-text ml30">Home</b></a></li>
          <li><a class="bold-text" href="<%=request.getContextPath()%>/trackerlist.jsp"><i class="trackericon"></i><b class="bold-text ml30">Trackers</b></a></li>
          <li><a class="bold-text" href="<%=request.getContextPath()%>/favorites.jsp"><i class="favoriteicon"></i> <b class="bold-text ml30">Favorites</b></a></li>
        
             </ul>
      </div>

   <div class="col-lg-3">
  	 
        
         <ul class="nav main-menu2 float-right" style="display:inline-flex; display:-webkit-inline-flex; display:-mozkit-inline-flex;">
        
        	<li class="cursor-pointer"><a href="login.jsp">Login</a></li>
         </ul>
      
      </div>

      </div>
      <div class="col-md-12 bg-dark d-md-block d-sm-block d-xs-block d-lg-none d-xl-none p0 mt20">
      <div class="collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav mr-auto mobile-menu">
                        <li class="nav-item active">
                <a class="" href="<%=request.getContextPath()%>/blogbrowser.jsp">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<%=request.getContextPath()%>/trackerlist.jsp">Trackers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<%=request.getContextPath()%>/favorites.jsp">Favorites</a>
              </li>
            </ul>
    </div>
      </div>
     <!--  <div class="col-md-12 mt0">
      <input type="search" class="form-control p30 pt5 pb5 icon-big border-none bottom-border text-center blogbrowsersearch nobackground" placeholder="Search Notifications">
      </div> -->

      

    </nav>
<div class="container">


<!-- <div class="row mt10">
<div class="col-md-12 ">
<h6 class="text-center pt20 pb20 notificationsfont">2018</h6>
</div>
</div> -->

<!-- <div class="row mt30">
<div class="col-md-12 pl30 pr30">
<h6 class="float-left text-primary">30 Blogs added</h6>
<h6 class="float-right text-primary">Recent <i class="fas fa-chevron-down"></i></h6><h6>
</h6></div>
</div> -->

<div class="col-lg-12 col-md-12 pt0 pb10  mt10 mb10 notification">


</div>



<div class="col-lg-12 col-md-12 pt0 pb10  mt10 mb10 notification ">
<form enctype="multipart/form-data" id="image-form" name="blog_form" action="blogupload.jsp" method="POST">
<h1 class="text-primary addblogtitle">Add Blogs</h1>

<div class="card noborder curved-card mb30 containerdropfile pt40 pb40 mt20 createblog ">
<h5 class="text-primary text-center">Click here to add blog</h5>
<div>
<button type="button" class="offset-md-4 col-md-4 mt10 form-control text-primary bold-text cursor-pointer btn createtrackerbtn bgwhite addblogbtn">+</button>
</div>
<div class="offset-md-4 col-md-4 mt20">
<a class="orcontainer pt10">or</a>
<hr /></div>
<h5 class="text-primary text-center">Drag in or choose a .txt file</h5>
<!-- <input type="file" accept=".txt" id="selected_file" name="blog_file" class="offset-md-4 col-md-4 form-control"/> -->

<input type="file" accept=".txt" name="file" id="file" class="offset-md-4 col-md-4 form-control"> 
</div>

<div class="card noborder curved-card mb30 containeraddblog pt60 pb60 mt20 hidesection">
<div class="createblogsection" >
<h5 class="text-primary text-center mt20 mb20">Enter Blog's Name and URL</h5>

<div class="form-group">
<input class= "form-control offset-md-2 col-md-8 col-md-2 blogtitle pt10 pb10 mb20" id="blog_name" type="text" placeholder="Enter Blog Name" />
</div>
<div class="form-group mt20">
<input class=" form-control offset-md-2 col-md-8 col-md-2 blogurl pt10 pb10" id="blog_url" placeholder="http://example.com" type="url" />
</div>
<div class="text-center"><button type="button" class="btn text-primary cancelbtn">Cancel</button>&nbsp;<button id="create_blog" type="button" class="btn btn-success createbtn">Create</button></div>
</form>
</div>

<!-- <div class="addblogsection" >
<h5 class="text-primary text-center">Click here to add blog</h5>
<div>
<button class="offset-md-4 col-md-4 mt10 form-control text-primary bold-text cursor-pointer btn createtrackerbtn bgwhite addblogbtn">+</button>
</div>
<div class="offset-md-4 col-md-4 mt20">
<a class="orcontainer pt10">or</a>
<hr /></div>
<h5 class="text-primary text-center">Drag in or choose a .txt file</h5>
<input type="file" class="offset-md-4 col-md-4 form-control"/> 
</div> -->
</div>

<div class="col-md-12 mt10 mb50 pl0 pr0">
<h2 class="text-primary addblogtitle bold-text">Blogs Added</h2>
		<table cellpadding="4" id="bloglist" style="width:100%">
		<thead>
		<tr>
		<td class="text-primary"></td>
		<th class="text-primary">Blog Name</th>
		<th class="text-primary">Status</th>
		<th class="text-primary">No. of Posts</th>
		<th class="text-primary">Latest Update</th>
		<th> </th>
		</tr>
		</thead>
		<tbody id="append">
								
			<tr class="<%=statusstyle %>">
			<td class="text-left pl0 blogcount">1</td>
			<td class="text-primary text-left nameofblog">linda</td>
			<td class="text-primary text-left blogstatus">active</td>
			<td class="text-primary text-left"></td>
			<td class="text-primary text-left"></td>
			<td class="text-primary text-center"><i id="<%=id %>" class="text-primary icontrackersize cursor-pointer deleteblog deletebtn text-center" data-toggle="tooltip" data-placement="top" title="Delete Blog"></i></td>
			<td class="text-center"><i class="text-primary icontrackersize cursor-pointer deleteblog text-center" onclick= "<% new_blog._deleteBlog(username, Integer.parseInt(id)); %>" data-toggle="tooltip" id="<%=id%>_select" data-placement="top" title="Delete Blog"></i></td>
			</tr>
		
		</tbody>
		</table>
</div>
<p class="text-primary p30 pt30 pb0">Enter the URL of the Blog <b>(with http://)</b> and press Enter to save</p>
<form method="add" method="post" autocomplete="off" action="<%=request.getContextPath()%>/addblog.jsp">
<input type="url" placeholder="Enter a Blog URL" required name="term" class="form-control blogsearch bold-text"/>
<p class="text-center"><button type="submit" class="btn btn-success homebutton mt0 p40 pt10 pb10 mb10 mt20">Add Blog</button></p>  
 <div class="card-body pt0">

</div>
</form> 

<div class="col-md-12 mt10 mb50">
		<table cellpadding="4" id="bloglist" style="width:100%">
		<thead>
		<tr>
		<th class="text-primary text-center">Id</th>
		<th class="text-primary text-center">Blog Added</th>
		<th class="text-primary text-center">Status</th>
		<th class="text-primary text-center">Actions</th>
		</tr>
		</thead>
		<tbody>		
		<!-- <div id="bloglist"> -->
									
			<tr>
			<td class="text-center">2</td>
			<td class="text-center">garrick</td>
			<td class="text-center">inactive</td>
			<td class="text-center"><i onclick="deleteBlog()" class="text-primary icontrackersize cursor-pointer deleteblog text-center" data-toggle="tooltip" data-placement="top" title="Delete Blog"></i></td>
			<td class="text-center"><i class="text-primary icontrackersize cursor-pointer deleteblog text-center" onclick= "<% new_blog._deleteBlog(username, Integer.parseInt(id)); %>" data-toggle="tooltip" id="<%=id%>_select" data-placement="top" title="Delete Blog"></i></td>
			</tr>
	
		</tbody>
		
		</table>
</div> 


</div>







</div>




 <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>



 <script type="text/javascript">
 	document.getElementById('file').onchange = function(){

	  var file = this.files[0];

	  var reader = new FileReader();
	  reader.onload = function(progressEvent){
	    // Entire file
	    console.log(this.result);

	    // By lines
	    var lines = this.result.split('\n');

        

	  
	    for(var line = 0; line < lines.length; line++){

	    	  var node = '<tr class="<%=statusstyle %>">';
			node += '<td class="text-left pl0 blogcount">1</td>'
			node += '<td class="text-primary text-left nameofblog">'+lines[line]+'</td>'
			node += '<td class="text-primary text-left blogstatus">active</td>'
			node += '<td class="text-primary text-left"></td>'
			node += '<td class="text-primary text-left"></td>'
			node += '<td class="text-primary text-left"></td>'
			node += '<td class="text-primary text-left"></td>'
			node += '</tr>'

	    	
	    document.getElementById("append").innerHTML +=  node; 
	    	// alert(lines[line])
	      // console.log(lines[line]);
	    }
	  };
	  reader.readAsText(file);
	};
 </script>

 <script type="text/javascript" src="pagedependencies/baseurl.js">


 	document.getElementById('file').onchange = function(){

  var file = this.files[0];

  var reader = new FileReader();
  reader.onload = function(progressEvent){
    // Entire file
    console.log(this.result);

    // By lines
    var lines = this.result.split('\n');
    for(var line = 0; line < lines.length; line++){
    	alert('sff');
      // console.log(lines[line]);
    }
  };
  reader.readAsText(file);
};
 </script>


<script src="assets/bootstrap/js/bootstrap.js">



<% String blogname = "";
%>
function deleteBlog(){
	<% if (results_blogadded.size() > 0) {
		for (int k = 0; k < results_blogadded.size(); k++) {				
			ArrayList blog = (ArrayList)results_blogadded.get(k);
			String id = (String)blog.get(0);
			blogname = (String) blog.get(2);
			String status = (String) blog.get(3);
		}
	}
	%>
	var blogname = <%=blogname%>;
	console.log(blogname);
	
}

</script>
<!-- <script>
$(document).ready(function() {

	$('.deleteblog1').on('click', function(){
		alert('clciked');
		var confirmdeleteofblog = confirm("Are you sure you want to delete this blog");
		if(confirmdeleteofblog )
			{
			eachblogdelete = $(this);
			var id = $(this).attr("id");
			id = id.split("_");
			allid = id[0];
			console.log(allid);
			console.log($("#teeid").val());
			toastr.success("Deleting blog...","Success");
			$.ajax({
				url: app_url+'tracker2',
				method: 'POST',
				data: {
					action:"removeblog",
					blog_ids:allid,
					tracker_id:$("#teeid").val()
				},
				error: function(response)
				{						
					console.log(response);		
				},
				success: function(response)
				{   
					console.log(response);
					if(response.indexOf("success")>-1){					
							eachblogdelete.parent().parent().remove();
						// should kick in the automated crawler or something 	
							toastr.success("Blog Deleted from Tracker","Success");
							$('.tooltip').hide();
							
							numberofblogs = $('.edittrackerblogindividual').length;
							//$('#totalblogcount').html(numberofblogs);
							var initc = $(".stattext").html();
							initc = parseInt(initc)-1;
							$(".stattext").html(initc);
							
							countselectedfromdefault =  $('.edittrackerblogindividual').children(".checkblogleft").children(".checkblog").length;
//							console.log(countselectedfromdefault);
							blogselectedcount = countselectedfromdefault;
							$('#selectedblogcount').html(blogselectedcount);
							setTimeout(function(){location.reload();},2000);
						
					}else{
						toastr.error('Blogs could not be removed!','Error');
					}
				}
			});
			
				
			}
		
			
		});
	
} );
</script> -->
<!--end for table  -->

<script type="text/javascript" src="assets/js/toastr.js"></script>

<script type="text/javascript" src="pagedependencies/baseurl.js"></script>
<script src="assets/js/generic.js">
</script>
<script src="pagedependencies/addblog.js?v=148906"> </script>

</body>
</html>

