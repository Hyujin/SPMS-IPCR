<?php

$start_date_format = date_create($strtdt);
$end_date=date_create("data->end_date");



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>PDF Viewer</title>
    <link rel="stylesheet" media="print" href="<?php echo e(asset('css/print.css')); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo e(asset('css/printstyle.css')); ?>">
  </head>
  <body>
    <div class='main'>
      <div class='wrapper'>
       <img class="col-md-12" alt="" src="<?php echo e(asset('profile/headerImg.png')); ?>">
        <p class='p1'><b>SPMS - Annex B</b></h6></p>
        <p class='p2'><b>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR) FORM</b></p>
       
        <div class='vl1'>
          <div class='vlvl1'>
           
            <p class='p3'><b>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</b></p>
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
         <div style="visibility: hidden;">
                <?php echo e($thisStartdate = $value->start_date); ?>

                <?php echo e($thisEnddate = $value->start_date); ?>


         </div>
         
            
            <p class='p4'>I, <b><u><?php echo e(strtoupper($value->first_name)); ?></u></b>, of <b><u><?php echo e($value->division); ?></u></b> (Division) of the Department of Science and Technology Regional Office XI, commit to deliver and agree to be rated on the attainment of the following targets in accordance with the indicated measures for the period of <b><u><?php $frmt_strtdt = date_create($thisStartdate);
              echo date_format($frmt_strtdt, "M Y");
             ?> to <?php $frmt_enddt = date_create($thisEnddate);
              echo date_format($frmt_enddt, "M Y");
             ?></u></b>.</p>

              

            <p class='p5'>
              <b><u><?php echo e($value->first_name); ?> <?php echo e($value->middle_name); ?> <?php echo e($value->last_name); ?></u></b>
            </p>
            <p class='ps5'>
              <u><?php
              echo date("M d Y");
             ?></u></b>
            </p>
            <p class='p6'>
              Employee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date
            </p>
            <br>
            <div>
              <table width='390px'>
              <tr>
                <td class='tde' colspan='2'><b>Reviewed by:</b></td>
              </tr>
              <tr>
                <td class='tdk' align="center" ><b><?php echo e(strtoupper($value->reviewed)); ?></b></td>
                <td class='tdk' align="center" ><b><?php
              echo date("M d Y");
             ?></b></td>
              </tr>
              <tr>
                <td class='tde' align="center">Immediate Supervisor</td>
                <td class='tde' align="center">Date</td>
              </tr>
            </table>
            
            <table width='390px' class='t12'>
              <tr>
                <td class='tde' colspan='2'><b>Approved by:</b></td>
              </tr>
              <tr>
                <td class='tdk' align="center" ><b><?php echo e(strtoupper($value->approved)); ?></b></td>
                <td class='tdk' align="center" ><b><?php
              echo date("M d Y");
             ?></b></td>
              </tr>
              <tr>
                <td class='tde' align="center">Regional Director</td>
                <td class='tde' align="center">Date</td>
              </tr>
            </table>
            </div>
            


            <table class='t1' width="100%">
              <colgroup></colgroup>
              <colgroup span="5"></colgroup>
              <tr>
                <th width="17%" rowspan="2">OUTPUTS</th>
                <th rowspan="2">SUCCESS INDICATORS (Targets + Measures)</th>
                <th rowspan="2">ACTUAL ACCOMPLISHMENTS</th>
                <th width="12%" colspan="4">RATING</th>
                <th width="3%" rowspan="2">REMARKS</th>
              </tr>
              <tr>
                <th width="3%">Q</th>
                <th width="3%">E</th>
                <th width="3%">T</th>
                <th width="3%">A</th>
              </tr>
              <tr>
                <td  class='tde' bgcolor="lightgrey" colspan="8"><b>A OPREATIONS</b></td>
              </tr>
              <tr>
                <td  class='tde' colspan="8"><b>S&T Program for Regional and Countryside Development</b></td>
              </tr>
              <tr>
                <td  class='tde' colspan="8" align="center"><b><i>I.  DIFFUSION AND TRANSFER OF KNOWLEDGE AND TECHNOLOGIES; AND OTHER RELATED PROJECTS AND ACTIVITIES</i></b></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php $__currentLoopData = $operations1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                <tr>
                  <td><?php echo e($data->output); ?></td>
                  <td><?php echo e($data->success_indicator); ?></td>
                  <td><?php echo e($data->actual_accomplishments); ?></td>
                  <td align='center'><?php echo e($data->quality); ?></td>
                  <td align='center'><?php echo e($data->efficiency); ?></td>
                  <td align='center'><?php echo e($data->timeliness); ?></td>
                  <td align='center'><?php echo e($data->average); ?></td>
                  <td align='center'><?php echo e($data->remarks); ?></td>
                </tr>
               
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class='tde' colspan="8" align="center"><b><i>II.   ENHANCEMENT OF SCIENCE AND TECHNOLOGY PROJECTS/ACTIVITIES</i></b></td>
              </tr>
              <?php $__currentLoopData = $operations2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                <tr>
                  <td><?php echo e($data->output); ?></td>
                  <td><?php echo e($data->success_indicator); ?></td>
                  <td><?php echo e($data->actual_accomplishments); ?></td>
                  <td align='center'><?php echo e($data->quality); ?></td>
                  <td align='center'><?php echo e($data->efficiency); ?></td>
                  <td align='center'><?php echo e($data->timeliness); ?></td>
                  <td align='center'><?php echo e($data->average); ?></td>
                  <td align='center'><?php echo e($data->remarks); ?></td>
                </tr>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="8"><b>B. GENERAL ADMINISTRATIVE SERVICES</b></td>
              </tr>
              <?php $__currentLoopData = $general_administrative_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
              <tr>
                <td><?php echo e($data->output); ?></td>
                <td><?php echo e($data->success_indicator); ?></td>
                <td><?php echo e($data->actual_accomplishments); ?></td>
               <td align='center'><?php echo e($data->quality); ?></td>
                  <td align='center'><?php echo e($data->efficiency); ?></td>
                  <td align='center'><?php echo e($data->timeliness); ?></td>
                  <td align='center'><?php echo e($data->average); ?></td>
                  <td align='center'><?php echo e($data->remarks); ?></td>
              </tr>
             
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="8"><b>C. SUPPORT TO OPERATIONS</b></td>
              </tr>
              <?php $__currentLoopData = $support_to_operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
              <tr>
                <td><?php echo e($data->output); ?></td>
                <td><?php echo e($data->success_indicator); ?></td>
                <td><?php echo e($data->actual_accomplishments); ?></td>
                <td align='center'><?php echo e($data->quality); ?></td>
                <td align='center'><?php echo e($data->efficiency); ?></td>
                <td align='center'><?php echo e($data->timeliness); ?></td>
                <td align='center'><?php echo e($data->average); ?></td>
                <td align='center'><?php echo e($data->remarks); ?></td>
              </tr>
             
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="8"><b>INNOVATION</b></td>
              </tr>
               <?php $__currentLoopData = $innovation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <tr>
                <td><?php echo e($data->output); ?></td>
                <td><?php echo e($data->success_indicator); ?></td>
                <td><?php echo e($data->actual_accomplishments); ?></td>
                <td align='center'><?php echo e($data->quality); ?></td>
                <td align='center'><?php echo e($data->efficiency); ?></td>
                <td align='center'><?php echo e($data->timeliness); ?></td>
                <td align='center'><?php echo e($data->average); ?></td>
                <td align='center'><?php echo e($data->remarks); ?></td>
              </tr>
         
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            </table>
            <br>
            <br>
            <b>RATING SCALE</b>
            <table class='table2'>
              <colgroup></colgroup>
              <colgroup span="5"></colgroup>
              <tr>
                <td align='center' class='tde'>5 – <b><i>Outstanding</i></b><br>130% and above</td>
                <td align='center' class='tde'>4 – <b><i>Very Satisfactory</i></b><br>115% - 129%</td>
                <td align='center' class='tde'>3 – <b><i>Satisfactory</i></b><br>90% - 114%</td>
                <td align='center' class='tde'>2 – <b><i>Unsatisfactory</i></b><br>51% - 89%</td>
                <td align='center' class='tde'>1 – <b><i>Poor</i></b><br>51% and below</td>
              </tr>
            </table>
            <br>
            <b>SUMMARY OF RATINGS</b>
            <table class='table2'>
              <colgroup></colgroup>
              <colgroup span="5"></colgroup>
              <tr>
                <th width="40%" class='tde'><b>Category</b></th>
                <th class='tde'><b>No. of Outputs</b></th>
                <th class='tde'><b>Average Rating</b></th>
                <th class='tde'><b>Weighted Allocation</b></th>
                <th class='tde'><b>Final Rating</b></th>
              </tr>
              <tr>
                <td class='tde'>A. Operations</td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
              </tr>
              <tr>
                <td class='tde'>B. General Administrative Services</td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
              </tr>
              <tr>
                <td   class='tde'>C. Support to Operations</td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
              </tr>
              <tr>
                <td class='tde'>D. Innovation</td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
                <td align='center' class='tde'></td>
              </tr>
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="4" align="right"><b>Final Average Rating</b></td>
                <td align='center' class='tde'></td>
              </tr>
              <tr>
                <td class='tde' colspan="4" align="right"><b>Adjectival Rating</b></td>
                <td align='center' class='tde'></td>
              </tr>
              <tr>
                <td class='tde' colspan="5"><b>Comments and Recommendations for Developmental Purposes</b></td>
              </tr>
              <td colspan="5"></b></td>
            </tr>
          </table>
          <br>
          <table class='table2'>
            <colgroup></colgroup>
            <colgroup span="5"></colgroup>
            <tr> 
              <td class='tde' colspan="2"><b>Discussed with:</b></td>
              <td class='tde' colspan="2"><b>Assessed by:</b></td>
              <td class='tde' colspan="2"><b>Final Rating by:</b></td>
            </tr>
            <tr>
            

              <th height="80px" width="240px" valign='bottom'><b><?php echo e($value->first_name); ?> <?php echo e($value->middle_name); ?> <?php echo e($value->last_name); ?></b></th>
              <th></th>
              <th height="80px" width="240px" valign='bottom'><b><?php echo e($value->reviewed); ?></b></th>
              <th></th>
              <th height="80px" width="240px" valign='bottom'><b><?php echo e($value->approved); ?></b></th>
              <th></th>
             
            </tr>
        
            <tr>
              <td align='center' class='tde'>Employee</td>
              <td align='center' class='tde'>Date</td>
              <td align='center' class='tde'>Division Head</td>
              <td align='center' class='tde'>Date</td>
              <td align='center' class='tde'>Regional Director</td>
              <td align='center' class='tde'>Date</td>
             
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</body>
</html>
    