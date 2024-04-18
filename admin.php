<!DOCTYPE html>
<html>
	<head>
		<title>DTC Admin</title>
	</head>
    <style>
    body{
	height: 100vh;
	display: grid;
	align-items: center;
	background-image:url("background.jpg");   
	font-family: bold cooper;
    }
    button {   
        background:transparent;   
        width: 16%; 
        left:20px; 	   
            color: white;   
            padding: 10px;   
            margin: 1px 0px;   
            border: box;   
            cursor: pointer; 
            font-size:10px;
            border-radius:25px;
            border: 3px solid violet;  
            font-size:.8rem;
            font-weight: bold;
    }
    .b {
        padding:9px;
        border: 2px solid violet;  
        background:transparent;   
        width: 15%; 
        position: absolute;
        left:50%;
        top: 220%;
    }   
    button:hover {   
    opacity: 0.7;   
    background:aqua;
    }
    .tree{
        width: 100%;
        height: auto;
        text-align: center;	
    }
    .tree ul{
        padding-top: 20px;
        position: relative;
        transition: .5s;
    }
    .tree li{
        display: inline-table;
        text-align: center;
        position: relative;
        padding: 10px;
        transition .5s;
    }
    .tree li:only-child:after, .tree li:only-child:before{
        display: none;
    }
    .tree li:before, .tree li:after{
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 1px solid aqua;
        width: 51%;
        height: 10px;
    }
    .tree li:after{
        right: auto;
        left: 50%;
        border-left: 1px solid aqua;
        height:10px;
    }
    .tree li:first-child:before, .tree li:last-child:after{
        border: 10px;
        border-radius: 5px 5px 0px 0px;
    }
    .tree li:last-child:before{
        border-right: 1px solid aqua;
        border-radius: 0px 5px 0px 0px;
    }
    .tree a {
        border: 1px solid violet;
        padding: 10px;
        display: inline-grid;
        border-radius: 5px;
        text-decoration-line: none;
        transition: .5s;
    }
    .tree a img{
        width: 50%;
        height: 50px;
        margin-bottom: 10px;
        border-radius: 50%;
        margin: auto;
    }
    .tree a span{
        border: 1px solid violet;
        boder-radius: 5%;
        color: white;
        padding: 8px;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 500;
    }
    .x {
        position: absolute;
        right: 100%;
    }
    .staff, p{
        font-color: wite;
        text-decoration: underline;
    }

    /*Hover-Section*/

    .tree li a:hover, .tree li a:hover img, .tree li a:hover span, .tree li a:hover+ul li absolute
    {
        background: grey;
        color: aqua;
        border: 1px solid violet;
        box-shadow: 0px 0px 8px 1px blue;
    }

    .tree li a:hover+ul li:after, .tree li a:hover+ul li:before, .tree li x:hover+ul:before, .tree li x:hover+ul ul:before
    {
        border-color: red;
    }

            </style>
	<body class="staff">
        <?php include 'nav.php' ?>
			<div class="tree">
				<ul>
					<li class="p"><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Arnel B. Quiño, PhD</p>College President</span></a>
						<ul>
							<li class="v"><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span> ______________________<br>VP-Academic Affairs</span></a>
								<ul>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Ryan V. Rico</p>Dean BSCrim</span></a></li><br>
										<li><a href="#"><img src="ishead.jpg" alt="" height="100" width="100"><span><p>James Nicholas<br>S. Besinga</p>Dean BSIS</span></a></li><br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Gemma D. Pabatao</p>Head of BSTM</span></a></li><br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Jennifer G. Trazo</p>Academic Assistant</span></a></li><br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>June Q. Ayento</p>NSTP-Coordinator</span></a></li><br>	
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Jovencio B. Supieza</p>NSTP-ROTC Tactical NCO</span></a></li><br>
								</ul>
							</li>
							<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Vicente S. Dagangon</p>Director for Research<br> and Extension Office</span></a>
								<ul>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Virgilio P. Columnas Jr.</p>Registrar</span></a></li>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Jamela B. Cando</p>Executive Assistant</span></a></li><br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Mr. Nicandro M. Pagaran</p>Librarian</span></a></li>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Ma. Niza S. Campo</p><p>Elsa T. Camarines</p>Library Assistants</span></a></li><br>
										<li><a href="#"><span>MAJOR EDUCATION FACULTY
											<p>Mia Rose E. Casusula</p>
											<p>Jamela B. Cando</p>
											<p>Marynol Virgie P. Lofranco</p>
											<p>Angelica V. Pacris</p>
											<p>Gemma D. Pabatao</p>
											<p>Ruel S. Villamor</p>
											</span></a></li><br>
										<li><a href="#"><span>GENERAL EDUCATION FACULTY
											<p>Mary Grace N. Vidad</p>
											<p>Florence S. Flores</p>
											<p>Thelma G. Labisto</p>
											</span></a></li><br>
										<br>
										<br>
										<br>
										<br>
										<ul>
							<li><a href="#"><span>Students</span></a>
						</ul>
							</ul></li>
							<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Magencio D. Celis L. Mgt.D /Hum. D</p>VP-Admin and Operation</span></a>
								<ul>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span>________________________<br>Student Affairs Office</span></a></li></br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span>________________________<br>Admin Assistant/<br>Secretary</span></a></li><br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Jonnah D. Gonzaga</p>Admin Liaison Office</span></a></li></br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Marisa C. Guisado</p>Property Custodian</span></a></li><br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Nathaniel Ayento</p><p>Joel Supieza</p><p>Danny Estillore</p>Security & Safety<br>Officers</span></a></li></br>
										<li><a href="#"><img src="islogo.jpg" alt="" height="100" width="100"><span><p>Elvira T. Socorin</p><p>Juliet A. Lopez</p>School Utility</span></a></li>
						</ul>
					</li>
			</div>
	</body>
</html>