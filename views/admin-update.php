<div id="page-wrapper">
    <div id="page-inner">


        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Status <small>Room Booking </small>
                </h1>
            </div>
        </div>


        <div class="row">
            <div  class="col-md-12 col-sm-6">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <!--											<button class="btn btn-default" type="button">-->
                                            <!--												 New Room Bookings  <span class="badge"></span>-->
                                            <!--											</button>-->
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                    <div class="panel-body">
                                        <div class="panel panel-default">

                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <form method="POST" action="update.html">
                                                        <div class="form-group">
                                                            <label>Title*</label>
                                                            <select name="title" class="form-control" required >
                                                                <option value selected ></option>
                                                                <option value="Dr.">Dr.</option>
                                                                <option value="Miss.">Miss.</option>
                                                                <option value="Mr.">Mr.</option>
                                                                <option value="Mrs.">Mrs.</option>
                                                                <option value="Prof.">Prof.</option>
                                                                <option value="Rev .">Rev .</option>
                                                                <option value="Rev . Fr">Rev . Fr .</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input name="fname" class="form-control" required>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input name="lname" class="form-control" required>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input name="email" type="email" class="form-control" required>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input name="country" type ="text" class="form-control" required>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input name="phone" type ="text" class="form-control" required>

                                                        </div>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="panel-body" class="col-md-12 col-sm-6"  >
                                                <div class="panel panel-primary" >
                                                    <div class="panel-heading">
                                                        RESERVATION INFORMATION
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Type Of Room *</label>
                                                            <select name="troom"  class="form-control" required>
                                                                <option value selected ></option>
                                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                                <option value="Deluxe Room">DELUXE ROOM</option>
                                                                <option value="Guest House">GUEST HOUSE</option>
                                                                <option value="Single Room">SINGLE ROOM</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bedding Type</label>
                                                            <select name="bed" class="form-control" required>
                                                                <option value selected ></option>
                                                                <option value="Single">Single</option>
                                                                <option value="Double">Double</option>
                                                                <option value="Triple">Triple</option>
                                                                <option value="Quad">Quad</option>
                                                                <option value="None">None</option>


                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>No.of Rooms *</label>
                                                            <select name="nroom" class="form-control" required>
                                                                <option value selected ></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Check-In</label>
                                                            <input name="cin" type ="date" class="form-control">

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Check-Out</label>
                                                            <input name="cout" type ="date" class="form-control">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">

                                            </div>



                                        </div>



                                                </div>
                                            </div>
                                        </div>
                                        <!-- End  Basic Table  -->
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">


                                                <input type="submit" name="submit" class="btn btn-primary">


                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">

                                    </div>

                                </div>

                            </div>
                </form>
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">

                                            <input type="button" class="btn btn-primary" name='up' value="Refresh Page" class='btn btn-primary' onClick="window.location.reload()">



                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="panel-body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!--DEMO END-->




<!-- /. ROW  -->

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->