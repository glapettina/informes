<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<li class="active">
				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>
			</li>

		<?php

				if ($_SESSION["perfil"] == "Administrador") {

					echo '<li class="treeview">
			          <a href="#">
			            <i class="fa fa-graduation-cap"></i>
			            <span>Alumnos</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="primero"><i class="fa fa-circle-o"></i> Primero C.B.</a></li>
			            <li><a href="segundo"><i class="fa fa-circle-o"></i> Segundo C.B.</a></li>
			            <li><a href="tercero"><i class="fa fa-circle-o"></i> Primero C.S.</a></li>
			            <li><a href="cuarto"><i class="fa fa-circle-o"></i> Segundo C.S.</a></li>
			            <li><a href="quinto"><i class="fa fa-circle-o"></i> Tercero C.S.</a></li>
			            <li><a href="sexto"><i class="fa fa-circle-o"></i> Cuarto C.S.</a></li>
			          </ul>
		    	    </li>';

						$item = 'rol';
						$valor = 'Administrador';  
						
						$menu = ControladorMenu::ctrMostrarMenu($item, $valor);


						foreach ($menu as $key => $value) {			

								echo '<li>
									<a href='.$value['enlace'].'>

										<i class="fa fa-users"></i>
										<span>'.$value['nombre'].'</span>

									</a>
								</li>';
						}

				}	  


     	 ?>

<?php

if ($_SESSION["perfil"] == "Administrador" || $_SESSION["ciclo"] == "Básico") {


	  echo'<li class="treeview">
		  <a href="#">
			  <i class="fa fa-graduation-cap"></i>  Ciclo Básico
			  <i class="fa fa-angle-left pull-right"></i>
		  </a>                            

			<ul class="treeview-menu">
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Primer Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>

					<ul class="treeview-menu">
						<li class="treeview">
						  <li>
								<a href="11tm">
								<i class="fa fa-check-circle-o"></i>
									1ro. 1ra. TM                          
								</a>
						  </li>  
						  <li>
								<a href="12tm">
								<i class="fa fa-check-circle-o"></i>
									1ro. 2da. TM                          
								</a>
						  </li>  
						  <li>
								<a href="13tm">
								<i class="fa fa-check-circle-o"></i>
									  1ro. 3ra. TM                          
						 		 </a>
						  </li> 
						  <li>
						  <a href="11tt">
						  <i class="fa fa-check-circle-o"></i>
							  1ro. 1ra. TT                         
						  </a>
					</li>  
					<li>
						  <a href="12tt">
						  <i class="fa fa-check-circle-o"></i>
							  1ro. 2da. TT                         
						  </a>
					</li>  
					<li>
						  <a href="13tt">
						  <i class="fa fa-check-circle-o"></i>
								1ro. 3ra. TT                         
							</a>
					</li> 
					  </li>
				  </li>
			  </ul>
			  </li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Segundo Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>
				
				<ul class="treeview-menu">
					<li class="treeview">
						<li>
							  <a href="21tm">
							  <i class="fa fa-check-circle-o"></i>
								  2do. 1ra. TM                         
							  </a>
						</li>
						<li>
							  <a href="22tm">
							  <i class="fa fa-check-circle-o"></i>
							  	  2do. 2da. TM                          
							  </a>
						</li>
						<li>
							  <a href="23tm">
							  <i class="fa fa-check-circle-o"></i>
							  	  2do. 3ra. TM                          
							  </a>
						</li>
						<li>
							  <a href="21tt">
							  <i class="fa fa-check-circle-o"></i>
							  		2do. 1ra. TT                         
							  </a>
						</li>
						<li>
							  <a href="22tt">
							  <i class="fa fa-check-circle-o"></i>
							  		2do. 2da. TT                         
							  </a>
						</li>
					</li>
				</ul>
				</li>
				</li>
				</ul>
				</li>';
			}

			?>

<?php

if ($_SESSION["perfil"] == "Administrador" || $_SESSION["ciclo"] == "Superior Alimentación") {


	  echo'<li class="treeview">
		  <a href="#">
			  <i class="fa fa-graduation-cap"></i>  C.S. Alimentación
			  <i class="fa fa-angle-left pull-right"></i>
		  </a>                            

			<ul class="treeview-menu">
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Primer Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>

					<ul class="treeview-menu">
						<li class="treeview">
						  <li>
								<a href="11atm">
								<i class="fa fa-check-circle-o"></i>
									1ro. 1ra. A TM                          
								</a>
						  </li>  
						  <li>
								<a href="12att">
								<i class="fa fa-check-circle-o"></i>
									1ro. 2da. A TT                          
								</a>
						  </li>  
					  </li>
				  </li>
			  </ul>
			  </li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Segundo Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>
				
				<ul class="treeview-menu">
					<li class="treeview">
						<li>
							  <a href="21atv">
							  <i class="fa fa-check-circle-o"></i>
								  2do. 1ra. A TV                         
							  </a>
						</li>
					</li>
				</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Tercer Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>
				
				<ul class="treeview-menu">
					<li class="treeview">
						<li>
							  <a href="31atv">
							  <i class="fa fa-check-circle-o"></i>
								  3ro. 1ra. A TV                         
							  </a>
						</li>
					</li>
				</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Cuarto Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>
				
				<ul class="treeview-menu">
					<li class="treeview">
						<li>
							  <a href="41atv">
							  <i class="fa fa-check-circle-o"></i>
								  4to. 1ra. A TV                         
							  </a>
						</li>
					</li>
				</ul>
				</li>
				</li>

				


				</ul>
				</li>';
			}

			?>

<?php

if ($_SESSION["perfil"] == "Administrador" || $_SESSION["ciclo"] == "Superior Electromecánica") {


	  echo'<li class="treeview">
		  <a href="#">
			  <i class="fa fa-graduation-cap"></i>  C.S. Electromecánica
			  <i class="fa fa-angle-left pull-right"></i>
		  </a>                            

			<ul class="treeview-menu">
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Primer Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>

					<ul class="treeview-menu">
						<li class="treeview">
						  <li>
								<a href="11etm">
								<i class="fa fa-check-circle-o"></i>
									1ro. 1ra. E TM                          
								</a>
						  </li>  
						  <li>
								<a href="11ett">
								<i class="fa fa-check-circle-o"></i>
									1ro. 1ra. E TT                          
								</a>
						  </li>  
					  </li>
				  </li>
			  </ul>
			  </li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Segundo Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>
				
				<ul class="treeview-menu">
					<li class="treeview">
						<li>
							  <a href="21etv">
							  <i class="fa fa-check-circle-o"></i>
								  2do. 1ra. E TV                         
							  </a>
						</li>
						<li>
							  <a href="22etv">
							  <i class="fa fa-check-circle-o"></i>
								  2do. 2da. E TV                         
							  </a>
						</li>
						<li>
							  <a href="23etv">
							  <i class="fa fa-check-circle-o"></i>
								  2do. 3ra. E TV                         
							  </a>
						</li>
					</li>
				</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Tercer Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>
				
				<ul class="treeview-menu">
					<li class="treeview">
						<li>
							  <a href="31etv">
							 	 <i class="fa fa-check-circle-o"></i>
								  3ro. 1ra. E TV                         
							  </a>
						</li>
						<li>
							<a href="32etv">
								<i class="fa fa-check-circle-o"></i>
								3ro. 2da. E TV                         
							</a>
						</li>
					</li>
				</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i>
						Cuarto Año
						<i class="fa fa-angle-left pull-right"></i>
					</a>
				
				<ul class="treeview-menu">
					<li class="treeview">
						<li>
							  <a href="41etv">
							  <i class="fa fa-check-circle-o"></i>
								  4to. 1ra. E TV                         
							  </a>
						</li>
						<li>
							  <a href="42etv">
							  <i class="fa fa-check-circle-o"></i>
								  4to. 2da. E TV                         
							  </a>
						</li>
					</li>
				</ul>
				</li>
				</li>
				</ul>
				</li>

				

		  </ul>   
 </li>';

 }

?>
				

		  </ul>   
 </li>




				

		  </ul>   
 </li>





		</ul>

		

	</section>

</aside>