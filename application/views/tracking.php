       <div class="content-header">
           <div class="container-fluid">
               <form id="track" method="post">

                   <div class="row col-md-12">
                       <div class="col-md-2">
                           <div class="form-group">
                               <input type="text" required="true" name="fromdate" id="fromdate"
                                   class="form-control datepicker" placeholder="From Date">
                           </div>
                       </div>
                       <div class="col-sm-2">
                           <div class="form-group">
                               <input type="text" required="true" name="todate" id="todate"
                                   class="form-control datepicker" placeholder="To Date">
                           </div>
                       </div>
                       <div class="col-md-5">
                           <div class="form-group">
                               <select id="t_vechicle" required="true" class="form-control selectized" name="t_vechicle"
                                   id="vehicle">
                                   <option value="">Select Vechicle</option>
                                   <?php foreach ($vechiclelist as $key => $vechiclelists) { ?>
                                   <option value="<?php echo output($vechiclelists['v_id']) ?>">
                                       <?php echo output($vechiclelists['v_name']) . ' - ' . output($vechiclelists['v_registration_no']); ?>
                                   </option>
                                   <?php  } ?>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                               <input type="button" class="btn" id='maploader' value="Load"></input>
                           </div>
                       </div>


                   </div>
               </form>
               <!-- Main content -->
               <section class="content">
                   <div class="container-fluid">
                       <div class="row-cards">
                           <!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                           <script src="<?php echo base_url(); ?>assets/map.js"></script> -->


                           <div class="" id="map_canvas" style="width: 100%; height: 475px; ">
                               <div class="mapouter">
                                   <div class="gmap_canvas"><iframe width="100%" height="1200" id="gmap_canvas"
                                           src="https://maps.google.com/maps?q=lagos&t=&z=16&ie=UTF8&iwloc=&output=embed"
                                           frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                           href="https://online.stopwatch-timer.net/">timer
                                           stopwatch</a><br><a href="https://www.onclock.net/"></a><br>
                                       <style>
                                       .mapouter {
                                           /* display: none; */
                                           margin: 0%;
                                           border: 0ch;
                                           padding: 0%;
                                           position: relative;
                                           text-align: right;
                                           height: 1000px;
                                           width: 100%;
                                       }
                                       </style><a href="https://www.ongooglemaps.com">google map net</a>
                                       <style>
                                       .gmap_canvas {
                                           margin: 0%;
                                           border: 0ch;
                                           padding: 0%;
                                           overflow: hidden;
                                           background: none !important;
                                           height: 1200px;
                                           width: 100%;
                                       }
                                       </style>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

               <script>
               let gmap = document.querySelector('.mapouter');
               let load = document.querySelector('#maploader');
               let input1 = document.querySelector('#fromdate');
               let input2 = document.querySelector('#todate');
               let vehicle = document.querySelector('#vehicle');


               gmap.style.display = 'none';


               load.addEventListener("click", () => {

                   if (input1.value === '' || input2.value === '') {

                   } else {


                       gmap.style.display = 'block';
                       console.log(input1.value)
                       console.log(input2.value)
                       console.log(vehicle.value)

                   }

               })
               //    
               </script>

               <!-- /.content -->