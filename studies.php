<!DOCTYPE html>
<html>
<head>
	<title>studies pg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
 
</head>
<body>
	<style>
			body {
		  background: #70dbdb;
		  position: relative;
		  background: -webkit-linear-gradient(to right, #70dbdb, #99ccff); 
		  background: linear-gradient(to right, #70dbdb, #99ccff);
		}
		  ul.nav-pills {
		    top: 20px;
		    position: fixed;
		  }
		  ul.movedown{
		  	top: 300px;
		    position: fixed;
		  }
		  div.col-8 div {
		    height: 500px;
		  }
		  .jumbomarg{
		  	color: #b3ff66;
		  	margin-top: 60px;
		  }
	</style>
	<!--Navigation bar------------------------------------------------------>
	<div id="nav-placeholder">

	</div>

	<script>
	$(function(){
	  $("#nav-placeholder").load("nav.html");
	});
	</script>
<!--end of Navigation bar--------------------------------------------------->
<!-----------------------Jumbotron--------------------------->
			<div class="container-fluid jumbomarg">
			<div class="jumbotron bg-success mt-20">
			  <h1>ACADEMIC RECORD</h1>
			  <p>A piece of paper can't decide your FUTURE....</p>
			</div>
			</div>	
<!--------scrollpy begins------------------------------------------>
<div data-spy="scroll" data-target="#myScrollspy" data-offset="1" >

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
      <ul class="nav nav-pills movedown flex-column">
        <li class="nav-item">
          <a class="nav-link " href="#section1">AISSCE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">AISSE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">COLLEGE</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#section31">SEM 1</a>
            <a class="dropdown-item" href="#section32">SEM 2</a>
            <a class="dropdown-item" href="#section33">SEM 3</a>
            <a class="dropdown-item" href="#section34">SEM 4</a>
            <a class="dropdown-item" href="#section35">SEM 5</a>
            <a class="dropdown-item" href="#section36">SEM 6</a>
            <a class="dropdown-item" href="#section37">SEM 7</a>
            <a class="dropdown-item" href="#section38">SEM 8</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-8 text-success">
      <div id="section1" class="bg-muted">    
        <h1>AISSCE</h1>
        <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Subject Code</th>
		        <th>Subject</th>
		        <th>Grade</th>
		        <th>Grade Point</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>101</td>
		        <td>ENG COMM.</td>
		        <td>A2</td>
		        <td>09</td>
		        
		        
		      </tr>
		      <tr>
		      	<td>085</td>
		        <td>HINDI COURSE</td>
		        <td>A1**</td>
		        <td>10</td>
		        
		      </tr>
		        <tr>
		        <td>041</td>
		        <td>MATHEMATICS</td>
		        <td>A1</td>
		        <td>10</td>
		        
		      </tr>
		      <tr>
		      	<td>086</td>
		      	<td>SCIENCE</td>
		      	<td>A1**</td>
		       	<td>10</td>
		     
		      </tr>
		      <tr>
		      	<td>087</td>
		      	<td>SOCIAL SCIENCE</td>
		      	<td>A1</td>
		      	<td>10</td>
		      </tr>
		      <tr>
		      	<td colspan="2">CUMULATIVE GRADE POINT ANVERAGE (CGPA) : 9.8</td>
		      </tr>
		    </tbody>
 		</table>

      </div>
      <div id="section2" class="bg-muted"> 
        <h1>AISSE</h1>
            <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Subject Code</th>
			        <th>Subject</th>
			        <th>Marks</th>
			        <th>Grade</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>301</td>
				    	<td>ENGLISH CORE</td>
				    	<td>076</td>
				    	<td>B1</td>
			    	</tr>
			    	<tr>
			    		<td>041</td>
			    		<td>MATHEMATICS</td>
			    		<td>072</td>
			    		<td>B1</td>
			    	</tr>
			    	<tr>
			    		<td>042</td>
			    		<td>PHYSICS</td>
			    		<td>078</td>
			    		<td>B1</td>
			    	</tr>
			    	<tr>
			    		<td>043</td>
			    		<td>CHEMISTRY</td>
			    		<td>085</td>
			    		<td>A2</td>
			    	</tr>
			    	<tr>
			    		<td>083</td>
			    		<td>COMPUTER SCIENCE</td>
			    		<td>096</td>
			    		<td>A1</td>
			    	</tr>
			    	<tr>
			    		<td>500</td>
			    		<td colspan="2">WORK EXPERIENCE</td>
			    		<td>A1</td>
			    	</tr>
			    	<tr>
			    		<td>502</td>
			    		<td colspan="2">PHY & HEALTH EDU</td>
			    		<td>A1</td>
			    	</tr>
			    	<tr>
			    		<td colspan="4">Percentage : 83%</td>
			    	</tr>
			    </tbody>
		    </table>
      </div>    
       <div id="section31" class="bg-muted">         
        <h1>SEM 1</h1>
            <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Subject Code</th>
			        <th>Subject</th>
			        <th>Grade</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>2110002</td>
				    	<td>COMMUNICATION SKILLS</td>
				    	<td>BB</td>
			    	</tr>
			    	<tr>
			    		<td>2110005</td>
			    		<td>ELEMENTS OF ELECTRICAL ENGINEERING</td>
			    		<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2110006</td>
			    		<td>ELEMENTS OF MECHANICAL ENGINEERING</td>
			    		<td>BB</td>
			    	</tr>
			    	<tr>
			    		<td>2110011</td>
			    		<td>PHYSICS</td>
			    		<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2110014</td>
			    		<td>CALCULUS</td>
			    		<td>CC</td>
			    	</tr>
			    	<tr>
			    		<td>2110017</td>
			    		<td>ELECTRICAL AND ELECTRONICS WORKSHOP</td>
			    		<td>BB</td>
			    	</tr>
			    	<tr>
			    		<td>SPI : 8.03</td>
			    		<td colspan="2">CPI : 8.03</td>
			    	</tr>
			    </tbody>
			    </tbody>
		    </table>
      </div>      
      <div id="section32" class="bg-muted">         
        <h1>SEM 2</h1>
        <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Subject Code</th>
			        <th>Subject</th>
			        <th>Grade</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>2110003</td>
				    	<td>COMPUTER PROGRAMMING AND UILIZATION</td>
				    	<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2110007</td>
			    		<td>ENVIRNMENTAL STUDIES</td>
			    		<td>BC</td>
			    	</tr>
			    	<tr>
			    		<td>2110013</td>
			    		<td> ENGINEERING GRAPHICS</td>
			    		<td>AA</td>
			    	</tr>
			    	<tr>
			    		<td>2110015</td>
			    		<td>VECTAR CALCULUS AND LINEAR ALGEBRA</td>
			    		<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2110016</td>
			    		<td>BASIC ELECTRONICS</td>
			    		<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2990001</td>
			    		<td>CONTRIBUTOR PERSONALITY DEVELOPMENT</td>
			    		<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>SPI : 9.00</td>
			    		<td colspan="2">CPI : 8.52</td>
			    	</tr>
			    </tbody>
			    </tbody>
		    </table>
      </div>
       <div id="section33" class="bg-muted">    
        <h1>SEM 3</h1>
               <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Subject Code</th>
			        <th>Subject</th>
			        <th>Grade</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>2130002</td>
				    	<td>ADVANCED EBGINEERING MATHEMATICS</td>
				    	<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2130004</td>
			    		<td>ENGINEERING ECONOMICS AND MANAGEMENT</td>
			    		<td>BC</td>
			    	</tr>
			    	<tr>
			    		<td>2130005</td>
			    		<td>DESIGN ENGINEERING-IA</td>
			    		<td>AA</td>
			    	</tr>
			    	<tr>
			    		<td>2130702</td>
			    		<td>DATA STRUCTURE</td>
			    		<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2130703</td>
			    		<td>DATABASE MANAGEMENT SYSTEMS</td>
			    		<td>AB</td>
			    	</tr>
			    	<tr>
			    		<td>2131004</td>
			    		<td>DIGITAL ENLECTRONICS</td>
			    		<td>BC</td>
			    	</tr>
			    	<tr>
			    		<td>SPI : 8.51</td>
			    		<td colspan="2">CPI : 8.53</td>
			    	</tr>
			    </tbody>
			    </tbody>
		    </table>
      </div>
      <div id="section34" class="bg-muted"> 
        <h1>SEM 4</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>    
       <div id="section35" class="bg-muted">         
        <h1>SEM 5</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section36" class="bg-muted">         
        <h1>SEM 6</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
       <div id="section37" class="bg-muted">         
        <h1>SEM 7</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section38" class="bg-muted">         
        <h1>SEM 8</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>

</div>

</body>
</html>