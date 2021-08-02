
<?php

/*echo $data->start_date;
$end_date=date_create("data->end_date");*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>PDF Viewer</title>
    <link rel="stylesheet" media="print" href="{{ asset('css/rate.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('css/rateinterface.css') }}">
  </head>
  <body>
    <div class='main'>
      <div class='wrapper'>
        <div class='vl1'>
          <div class='vlvl1'>
           <h3 align="center"> <b>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</b></h3>
        
   

            <table class='t1' width="100%">
              <colgroup></colgroup>
              <colgroup span="5"></colgroup>
              <tr>
                <th width="17%" rowspan="2">OUTPUTS</th>
                <th rowspan="2">SUCCESS INDICATORS (Targets + Measures)</th>
                <th rowspan="2">ACTUAL ACCOMPLISHMENTS</th>
                <th width="16%" colspan="4">RATING</th>
                <th width="18%%" rowspan="2">REMARKS</th>
              </tr>
              <tr>
                <th width="4%">Q</th>
                <th width="4%">E</th>
                <th width="4%">T</th>
                <th width="4%">A</th>
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
          

              @foreach ($operations1 as $data)
               
                <tr>
                  <td>{{$data->output}}</td>
                  <td>{{$data->success_indicator}}</td>
                  <td>{{$data->actual_accomplishments}}</td>
                  <td align='center'>
                      <div class="input-form">
                        <select name="op1_quality" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div>
                  </td>
                  <td align='center'><div class="input-form">
                        <select name="op1_efficiency" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'><div class="input-form">
                        <select name="op1_timeliness" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'>G</td>
                  <td align='center'>H</td>
                </tr>
               
              @endforeach
              <tr>
                <td class='tde' colspan="8" align="center"><b><i>II.   ENHANCEMENT OF SCIENCE AND TECHNOLOGY PROJECTS/ACTIVITIES</i></b></td>
              </tr>
              @foreach ($operations2 as $data)
               
                <tr>
                   <tr>
                  <td>{{$data->output}}</td>
                  <td>{{$data->success_indicator}}</td>
                  <td>{{$data->actual_accomplishments}}</td>
                  <td align='center'>
                      <div class="input-form">
                        <select name="op2_quality" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div>
                  </td>
                  <td align='center'><div class="input-form">
                        <select name="op2_efficiency" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'><div class="input-form">
                        <select name="op2_timeliness" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'>G</td>
                  <td align='center'>H</td>
                </tr>
                </tr>
                
              @endforeach
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="8"><b>B. GENERAL ADMINISTRATIVE SERVICES</b></td>
              </tr>
              @foreach ($general_administrative_services as $data)
             
                <tr>
                  <td>{{$data->output}}</td>
                  <td>{{$data->success_indicator}}</td>
                  <td>{{$data->actual_accomplishments}}</td>
                  <td align='center'>
                      <div class="input-form">
                        <select name="gas_quality" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div>
                  </td>
                  <td align='center'><div class="input-form">
                        <select name="gas_efficiency" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'><div class="input-form">
                        <select name="gas_timeliness" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'>G</td>
                  <td align='center'>H</td>
                </tr>
             
              @endforeach
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="8"><b>C. SUPPORT TO OPERATIONS</b></td>
              </tr>
              @foreach ($support_to_operations as $data)
             
               <tr>
                  <td>{{$data->output}}</td>
                  <td>{{$data->success_indicator}}</td>
                  <td>{{$data->actual_accomplishments}}</td>
                  <td align='center'>
                      <div class="input-form">
                        <select name="sto_quality" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div>
                  </td>
                  <td align='center'><div class="input-form">
                        <select name="sto_efficiency" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'><div class="input-form">
                        <select name="sto_timeliness" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'>G</td>
                  <td align='center'>H</td>
                </tr>
             
              @endforeach
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="8"><b>INNOVATION</b></td>
              </tr>
               @foreach ($innovation as $data)
              
               <tr>
                  <td>{{$data->output}}</td>
                  <td>{{$data->success_indicator}}</td>
                  <td>{{$data->actual_accomplishments}}</td>
                  <td align='center'>
                      <div class="input-form">
                        <select name="innov_quality" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div>
                  </td>
                  <td align='center'><div class="input-form">
                        <select name="innov_efficiency" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'><div class="input-form">
                        <select name="innov_timeliness" class="form-control" required>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                        </select>
                    </div></td>
                  <td align='center'>G</td>
                  <td align='center'>H</td>
                </tr>
         
              @endforeach

            
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
                <td align='center' class='tde'>E</td>
                <td align='center' class='tde'>F</td>
                <td align='center' class='tde'>G</td>
                <td align='center' class='tde'>H</td>
              </tr>
              <tr>
                <td class='tde'>B. General Administrative Services</td>
                <td align='center' class='tde'>E</td>
                <td align='center' class='tde'>F</td>
                <td align='center' class='tde'>G</td>
                <td align='center' class='tde'>H</td>
              </tr>
              <tr>
                <td   class='tde'>C. Support to Operations</td>
                <td align='center' class='tde'>E</td>
                <td align='center' class='tde'>F</td>
                <td align='center' class='tde'>G</td>
                <td align='center' class='tde'>H</td>
              </tr>
              <tr>
                <td class='tde'>D. Innovation</td>
                <td align='center' class='tde'>E</td>
                <td align='center' class='tde'>F</td>
                <td align='center' class='tde'>G</td>
                <td align='center' class='tde'>H</td>
              </tr>
              <tr>
                <td class='tde' bgcolor="lightgrey" colspan="4" align="right"><b>Final Average Rating</b></td>
                <td align='center' class='tde'>H</td>
              </tr>
              <tr>
                <td class='tde' colspan="4" align="right"><b>Adjectival Rating</b></td>
                <td align='center' class='tde'>H</td>
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
    

            