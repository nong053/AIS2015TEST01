<script src='Controller/cProcessView.js'></script> 
<link href="css/processView.css" rel="stylesheet">

<link rel="stylesheet" href="css/plugins/nouslider/jquery.nouislider.css">
<link rel="stylesheet" href="css/plugins/ionRangeSlider/ion.rangeSlider.css">
<link rel="stylesheet" href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css">
 <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
 
<!-- Content Start-->     
				<div class="ibox">
                    <div class="ibox-title">
                        <h5>Process View</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="fullscreen-link">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <!-- process view start -->
                        <div class="row bgParam ">
                           
            	            <div class="col-xs-2 ">
                            <!-- slide start -->
                             <label class="control-label" for="product_name">Focus / Expand</label>
                            <div class="noUi-target noUi-ltr noUi-horizontal noUi-background slideTop" id="basic_slider">
                                
                                <div class="noUi-base">
                                    <div style="left: 48.1113%;" class="noUi-origin noUi-connect">
                                        <div class="noUi-handle noUi-handle-lower"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- slide end -->
                            </div>
            	             
            	            <div class="col-xs-10">
            	            
            	             <div class="row">
            	               <div class="col-xs-2">
            	                 
                                       
                                    <div class="form-group">
                                        <label class="control-label" for="product_name">PCV</label>
                                        <select class="form-control input-sm" name="">
                                            <option>Firing</option>
                                            <option>PULV</option>
                                            <option>Steam</option>
                                        </select> 
                                    </div>
                                    
            	               </div>
            	                <div class="col-xs-2">
            	                 
                                       
                                    <div class="form-group">
                                        <label class="control-label" for="product_name">Unit</label>
                                        <select class="form-control input-sm" name="">
                                            <option>MM08</option>
                                            <option>MM09</option>
                                            <option>MM10</option>
                                            <option>MM11</option>
                                            <option>MM12</option>
                                            <option>MM13</option>
                                        </select> 
                                    </div>
                                    
            	               </div>
            	               
            	               <div class="col-xs-3">
            	                 
            	                     <div class="form-group">
                                        <label class="control-label" for="product_name">Date</label>
                                       
                                        <div class="input-group date ">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control input-sm" value="03/04/2014">
                                        </div>
                                         
                                    </div>
                                   
            	               </div>
            	               <div class="col-xs-1">
            	               
            	                         <div class="form-group">
                                            <label class="control-label" for="product_name">Hour</label>
                                           
                                            <div class="input-group ">
                                                <input type='text' class='input-sm form-control' name='' value='0.00'>
                                            </div>
                                        </div>
                                    
                                       
                                   
            	               </div>
            	               <div class="col-xs-1"   >
            	                 
                                         <div class="form-group">
                                            <label class="control-label" for="product_name">Manate</label>
                                           
                                            <div class="input-group ">
                                                <input type='text' class='input-sm form-control' name='' value='0.00'>
                                            </div>
                                        </div>
                                   
            	               </div>
            	                <div class="col-xs-1"   >
            	                 
                                         <div class="form-group">
                                            <label class="control-label" for="product_name">Span T</label>
                                           
                                            <div class="input-group ">
                                                <input type='text' class='input-sm form-control' name='' value='0.00'>
                                            </div>
                                        </div>
                                   
            	               </div>
            	               
            	              
        	                   <div class="col-xs-2">
               
                                    <a class="btn btn-primary  btn-sm btnSubmit" href="#">แสดง </a>
                                    <button class="btn btn-warning btn-sm  btnSubmit" type="button">
                                        <i class="fa fa-download"></i>&nbsp;&nbsp;
                                       
                                    </button>
                               </div>
            	             </div>
                             

            	            </div>
                        </div>
                      
                        <div class='row'>
                            <div class='col-xs-12'>
                            <img src='images/1441185404.jpg'  width='100%'  height='400'>
                            </div>
                        </div>
                          <div class='row'>
                            <div class='col-xs-12'>
                            <a href="#" class="btn btn-primary  btn-sm " id='btnEvenShowHidden'>Show/Hidden </a>
                            </div>
                        </div>
                        <div class='row'>
                             <div class='col-xs-12'>
                                <!-- grid list event -->
                                  <table id="gridEventList">
                                        <colgroup>
                                            <col style="width:100%"/>
                                          
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th data-field="field1"><b>Event</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                                <td>4/92050159.06.51.51.359 RW36U001 COMD.SUB  MAKE UP CTV COM. DTV POS ALARM AL ABM2</td>
                                               
                                            </tr>
                                            <tr>
                                               
                                                <td>4/92050159.06.51.51.359 RW36U001 COMD.SUB  MAKE UP CTV COM. DTV POS ALARM AL ABM2</td>
                                               
                                            </tr>
                                            <tr>
                                               
                                                <td>4/92050159.06.51.51.359 RW36U001 COMD.SUB  MAKE UP CTV COM. DTV POS ALARM AL ABM2 MAKE UP CTV COM. DTV POS ALARM AL ABM2</td>
                                               
                                            </tr>
                                            <tr>
                                               
                                                <td>4/92050159.06.51.51.359 RW36U001 COMD.SUB  MAKE UP CTV COM. DTV POS ALARM AL ABM2</td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                   </table>
                                   <br style='clear:both'>
                                  <!-- grid list event -->
                             </div>
                        </div>
                        <!-- process view end -->
                        
                        <br style='clear: both'>
                        <br style='clear: both'>
                    </div>
                </div>
  <!-- Content End-->           