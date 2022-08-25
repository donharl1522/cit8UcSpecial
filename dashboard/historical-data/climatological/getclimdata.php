<div class="container my-5">
      <form method="post">
         <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
               <button
                  class="navbar-toggler"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#navbarTogglerDemo01"
                  aria-controls="navbarTogglerDemo01"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  >
               <i class="fas fa-bars"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <a class="navbar-brand" href="#">Date</a>
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item ps-2 my-2">
                        <select class="form-select" name="fromYear" id="fromYear">
                           <option disabled selected>From</option>
                           <?php
                              for ($year=2015; $year <= date('Y'); $year++) { 
                                 echo "<option value='$year'>" . $year . "</option>";
                              }
                              ?>
                        </select>
                     </li>
                     <li class="nav-item ps-2 my-2">
                        <select disabled class="form-select"  name="toYear" id="toYear">
                           <option disabled selected>To</option>
                           <?php
                              for ($year=2015; $year <= date('Y'); $year++) { 
                                echo "<option id='to$year' value='$year'>" . $year . "</option>";
                              }
                              ?>
                        </select>
                     </li>

                  </ul>
                  <div class="d-flex input-group w-auto">
                     
                     <button
                        class="btn  btn-color-primary btn-lg"
                        type="submit"
                        name="search"
                        data-mdb-ripple-color="dark"
                        >
                     Search
                     </button>
                  </div>
               </div>
            </div>
         </nav>
      </form>
      <script type="text/javascript">
         document.getElementById("fromYear").onchange = function () {
         document.getElementById("toYear").setAttribute("disabled", "disabled");
         <?php for ($year=2015; $year <= date('Y'); $year++):?>
              if (this.value > '<?php echo $year; ?>'){
                 document.getElementById("toYear").removeAttribute("disabled");
                 document.getElementById("to<?php echo $year; ?>").disabled = true;
              }
              else{
                 document.getElementById("toYear").removeAttribute("disabled");
                 document.getElementById("to<?php echo $year; ?>").disabled = false; 
              }
         <?php endfor ?>
         };
      </script>

      
   </div>
   <div class="container my-5">
      <div class="container-fluid">
         <table id="example" class="table align-middle mb-0 bg-white">
            <tbody>
               <?php
                  if(isset($_POST['search'])){
                  
                     if(isset($_POST['fromYear']) && isset($_POST['toYear'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                        ?>
            <thead class="bg-light">
               <tr>
                  <th>Year</th>
                  <th>Month</th>
                  <th>Rainfall</th>
                  <th>Max Temperature</th>
                  <th>Minimum Temperature</th>
                  <th>Relative Humidity</th>
                  <th>Wind Speed</th>
                  <th>Wind Direction</th>
               </tr>
            </thead>
            <?php
               echo "<p class='container text-center blockquote pb-2'><i class='far fa-lightbulb pe-2'></i> "." Data from ".$yearSearchedFrom." to ".$yearSearchedTo."</p>";
               
               
               $res=mysqli_query($link,"SELECT * FROM histclimdataset WHERE year between '$yearSearchedFrom' and '$yearSearchedTo'");
               
               while($row=mysqli_fetch_array($res)):?>
            <tr>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["year"]; ?></p>
               </td>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["month"]; ?></p>
               </td>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["rainFall"]; ?></p>
               </td>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["tMax"]; ?> <span class="text-muted mb-0">°C</span></p>
               </td>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["tMin"]; ?> <span class="text-muted mb-0">°C</span></p>
               </td>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["rh"]; ?> <span class="text-muted mb-0">%</span></p>
               </td>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["windSpeed"]; ?> <span class="text-muted mb-0">km/h</span></p>
               </td>
               <td>
                  <p class="fw-normal mb-1"><?php echo $row["windDirection"]; ?></p>
               </td>
            </tr>
            <?php endwhile?>
            <?php }
               }?>
            </tbody>
         </table>
      </div>
   </div>