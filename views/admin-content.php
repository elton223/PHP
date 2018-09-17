    
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Status <small>Room Booking </small>

                        <?php 
                            if(!empty($editoRezervimin)){
                                echo $editoRezervimin;
                            }
                             
                        ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>titulli</th>
                                                                <th>emri</th>
                                                                <th>Mbiemri</th>
                                                                <th>Email</th>
                                                                <th>Vendi</th>
                                                                <th>Cel</th>
                                                                <th>Nr i Dhomes</th>
                                                                <th>Shtreter</th>
                                                                <th>Sasi Dhomash</th>
                                                                <th>Hyrje</th>
                                                                <th>Dalje</th>
                                                                <th>Edit</th>>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($PlatSelektoTabelens as $ShfaqRRjeshtat){ ?>
                                                            <tr>
                                                                <td><?php echo  $ShfaqRRjeshtat['id'];  ?>" </td>
                                                                <td><?php echo  $ShfaqRRjeshtat['Title'];  ?></td>
                                                                <td><?php echo  $ShfaqRRjeshtat['FName']; ?></td>
                                                                <td><?php echo  $ShfaqRRjeshtat['LName'] ; ?> </td>
                                                                <td><?php echo $ShfaqRRjeshtat['Email']; ?> </td>
                                                                <td><?php echo  $ShfaqRRjeshtat['Country']; ?> </td>
                                                                <td><?php echo  $ShfaqRRjeshtat['Phone']; ?></td>
                                                                <td> <?php echo $ShfaqRRjeshtat['TRoom']; ?></td>
                                                                <td><?php echo $ShfaqRRjeshtat['Bed']; ?> </td>
                                                                <td><?php echo $ShfaqRRjeshtat['NRoom']; ?> </td>
                                                                <td><?php echo  $ShfaqRRjeshtat['cin']; ?> </td>
                                                                <td><?php echo  $ShfaqRRjeshtat['cout']; ?> </td>
                                                                <td><a href="/admin/AdminIndex/update/<?php echo  $ShfaqRRjeshtat['id'];  ?>" class="btn btn-info" >Edit</a></td>
                                                            </tr>
                                                       <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                              <!-- End  Basic Table  -->
                                    </div>
                                </div>
                            </div>
                           <div class="panel panel-danger">
                               <div class="panel-heading">
                                   <h4 class="panel-title">
                                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
<!--                                           <button type="button" class="btn btn-primary" name='up' value="Refresh Page" class='btn btn-primary' onClick="window.location.reload(location.reload('http://hermesproject/admin/AdminIndex'))"></button>-->
                                           <button type="button" class="btn btn-primary" name='up' value="Refresh Page"  onclick="location.href = 'http://hermesproject/admin/AdminIndex.html';" id="myButton" class="float-left submit-button" >Refresh Page</button>
                                       </a>
                                   </h4>
                               </div>
                           </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php if(isset($getRevervationDetail)): ?>        
<!-- Modal -->
<div id="myModal9" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">TE besh update</h4>
            </div>
            <form method="post" action="update.html">
            <div class="modal-body">
                    <input id="" type="hidden" class="form-control" value="<?php echo $getRevervationDetail['id']; ?>" name="id" >
                    <div class="input-group">
                        <label>Titulli</label>
                        <input id="Titulli" type="text" class="form-control" value="<?php echo $getRevervationDetail['Title']; ?>" name="titulli" placeholder="Titulli">
                    </div>
                    <div class="input-group">
                        <label>Emri</label>
                        <input id="Emri" type="text" class="form-control" name="emri" value="<?php echo $getRevervationDetail['FName']; ?>" placeholder="Emri">
                    </div>
                    <div class="input-group">
                        <label>Mbiemer</label>
                        <input id="Mbiemer" type="text" class="form-control" name="mbiemer" value="<?php echo $getRevervationDetail['LName']; ?>" placeholder="Mbiemer">
                    </div>
                <div class="input-group">
                    <label>Email</label>
                    <input id="Email" type="text" class="form-control" value="<?php echo $getRevervationDetail['Email']; ?>" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <label>Vendi</label>
                    <input id="Vendi" type="text" class="form-control" value="<?php echo $getRevervationDetail['Country']; ?>" name="vendi" placeholder="vendi">
                </div>
                <div class="input-group">
                    <label>Celular</label>
                    <input id="Cel" type="text" class="form-control" value="<?php echo $getRevervationDetail['Phone']; ?>" name="cel" placeholder="Cel">
                </div>
                <div class="input-group">
                    <label>Nr Dhomave</label>
                    <input id="Nr_dhomave" type="text" class="form-control" value="<?php echo $getRevervationDetail['TRoom']; ?>" name="nr_dhomes" placeholder="nr dhomes">
                </div>
                <div class="input-group">
                    <label>Shtreter</label>
                    <input id="Shtreter" type="text" class="form-control" value="<?php echo $getRevervationDetail['Bed']; ?>" name="shtreter" placeholder="shtreter">
                </div>
                <div class="input-group">
                    <label>Sasi Dhomash</label>
                    <input id="Sasi Dhomash" type="text" class="form-control" value="<?php echo $getRevervationDetail['NRoom']; ?>" name="sasi_dhomash" placeholder="sasi dhomash">
                </div>
                <div class="input-group">
                    <label>HYRJE</label>
                    <input id="Hyrje" type="text" class="form-control" value="<?php echo $getRevervationDetail['cin']; ?>" name="hyrje" placeholder="Hyrje">
                </div>
                <div class="input-group">
                    <label>Dalje</label>

                    <input id="Dalje" type="text" class="form-control" value="<?php echo $getRevervationDetail['cout']; ?>" name="dalje" placeholder="Dalje">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success pull-left" name="updateDB">Update</button>
                <button type="submit" class="btn btn-danger pull-left" name="delete">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>

    </div>
</div>
    <script>
        $(document).ready(function(){
            $("#myModal9").modal();
        });
    </script>
<?php endif; ?>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <!-- <script src="<?php echo TEMPLATEWEBPATH; ?>js/jquery-2.1.1.min.js"></script> -->
    <!-- Bootstrap Js -->
    <script src="<?php echo TEMPLATEWEBPATH; ?>js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Js -->
    <script src="<?php echo TEMPLATEWEBPATH; ?>js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?php echo TEMPLATEWEBPATH; ?>js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo TEMPLATEWEBPATH; ?>js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo TEMPLATEWEBPATH; ?>js/custom-scripts.js"></script>


</body>

</html>