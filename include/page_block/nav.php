<?php
/**
 * Navigation bar.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */
?>
<div id="nav">
  <nav class="container">
    <div class="nav-custom">
      <div class="nav-section">
        <a id="logo" class="logo" href="page_template.php"></a>
      </div>
      
      <div class="nav-section">
        <ul class="nav nav-pills nav-ul-margin">
          <li class="nav-option"><a href="#"><i class="icon-home"></i> Inicio</a>  </li>           
           <li class="dropdown">
             <a class="dropdown-toggle"
             data-toggle="dropdown"
             href="#">
             <b><i class="icon-th-list"></i> Servicios </b>
             <b class="caret"></b>
             </a>
                <ul class="dropdown-menu" >
                <li><a href="#">Limpieza de Vidrios</a></li>
                <li><a href="#">Limpieza de fin de obra</a></li>
                <li><a href="#">Limpieza de mantenimiento</a></li>
                <li><a href="#">Limpieza de techos</a></li>
                </ul>
           </li>
          <li class="nav-option"><a href="#"><i class="icon-resize-small"></i> Empleo</a></li>
          

        </ul>
      </div>
    </div>
  </nav>
</div>