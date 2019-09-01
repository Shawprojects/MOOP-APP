<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>MOOP | AAI</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">MOOP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Records</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./container -->
        </nav>
        <!-- END NAVBAR -->

        <br>

        <!-- Operation Section -->
        <section id="main-content">
            <div class="container">
                <div class="card">
                    <div class="card-header text-muted text-center">
                        Critical Elements of Opertional Area
                    </div>
                    <div class="card-body">

                        <form name="form1" action="pdf.php" method="POST">

                            <!-- GROUP A -->
                            <div class="row">
                                <div class="col-lg-4 col-md-6 bg-secondary">
                                    <div class="nav flex-column nav-pills p-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link text-white active" id="v-pills-a-tab" data-toggle="pill" href="#v-pills-a" role="tab" aria-controls="v-pills-a" aria-selected="true">
                                            Vegetation Control/Grass Cutting In Airside
                                        </a>

                                        <a class="nav-link text-white" id="v-pills-b-tab" data-toggle="pill" href="#v-pills-b" role="tab" aria-controls="v-pills-b" aria-selected="false">
                                            Airfield Inspection
                                        </a>

                                        <a class="nav-link text-white" id="v-pills-c-tab" data-toggle="pill" href="#v-pills-c" role="tab" aria-controls="v-pills-c" aria-selected="false">
                                            Bird & Wild Life Control
                                        </a>

                                        <a class="nav-link text-white" id="v-pills-d-tab" data-toggle="pill" href="#v-pills-d" role="tab" aria-controls="v-pills-d" aria-selected="false">
                                            Fuel & Hydraulic Oil Spillage
                                        </a>

                                        <a class="nav-link text-white" id="v-pills-e-tab" data-toggle="pill" href="#v-pills-e" role="tab" aria-controls="v-pills-e" aria-selected="false">
                                            Incident/Accident Reporting In Airside
                                        </a>

                                        <a class="nav-link text-white" id="v-pills-f-tab" data-toggle="pill" href="#v-pills-f" role="tab" aria-controls="v-pills-f" aria-selected="false">
                                            Friction Testing & Rubber Removal
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 bg-light">
                                    <div class="tab-content p-3" id="v-pills-tabContent">

                                        <div class="tab-pane fade show active" id="v-pills-a" role="tabpanel" aria-labelledby="v-pills-a-tab">
                                            <!-- START Content A -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="effective_date1">Effective Date</label>
                                                                <input type="date" name="datepicker1" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="revised_on1">Revised on</label>
                                                                <input type="date" name="datepicker2" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="critical_elements1">Critical Elements</label>
                                                                <select class="custom-select mr-sm-2" id="select_1" name="elements_1">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Grass with basic strip">Grass with basic strip</option>
                                                                    <option value="Near boundary wall & Fencing">Near boundary wall & Fencing</option>
                                                                    <option value="Grass in critical areas">Grass in critical areas</option>
                                                                    <option value="Any Other">Any Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="status1">Findings/status</label>
                                                                <select class="custom-select mr-sm-2" id="select_2" name="status_1">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Okay">Okay</option>
                                                                    <option value="Not Okay">Not Okay</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="remarks1">Remarks</label>
                                                                <textarea
                                                                    class="form-control"
                                                                    name="comment_1"
                                                                    id="comment"
                                                                    cols="20"
                                                                    rows="1"
                                                                    maxlength="20"
                                                                    placeholder="Comments.."
                                                                ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->
                                            </div> <!-- ./row -->
                                            <!-- END Content A -->
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-b" role="tabpanel" aria-labelledby="v-pills-b-tab">
                                        <!-- START Content B -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="effective_date2">Effective Date</label>
                                                                <input type="date" name="datepicker3" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="revised_on2">Revised on</label>
                                                                <input type="date" name="datepicker4" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="critical_elements2">Critical Elements</label>
                                                                <select class="custom-select mr-sm-2" id="select_3" name="elements_2">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Runway Markings">Runway Markings</option>
                                                                    <option value="Joints and Cracks">Joints and Cracks</option>
                                                                    <option value="Runway lights">Runway lights</option>
                                                                    <option value="Approach lights">Approach lights</option>
                                                                    <option value="Flood lights">Flood lights</option>
                                                                    <option value="Taxiway lights">Taxiway lights</option>
                                                                    <option value="Gp area">Gp area</option>
                                                                    <option value="Localizer area">Localizer area</option>
                                                                    <option value="Taxiway markings">Taxiway markings</option>
                                                                    <option value="Signages">Signages</option>
                                                                    <option value="LDI">LDI</option>
                                                                    <option value="WDI">WDI</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="status2">Findings/status</label>
                                                                <select class="custom-select mr-sm-2" id="select_4" name="status_2">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Okay">Okay</option>
                                                                    <option value="Not Okay">Not Okay</option>
                                                                    <option value="Repaired">Repaired</option>
                                                                    <option value="Not Repaired">Not Repaired</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="remarks2">Remarks</label>
                                                                <textarea
                                                                    class="form-control"
                                                                    name="comment_2"
                                                                    id="comment"
                                                                    cols="20"
                                                                    rows="1"
                                                                    maxlength="20"
                                                                    placeholder="Comments.."
                                                                ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->
                                            </div> <!-- ./row -->
                                            <!-- END Content B -->
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-c" role="tabpanel" aria-labelledby="v-pills-c-tab">
                                            <!-- START Content C -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="effective_date3">Effective Date</label>
                                                                <input type="date" name="datepicker5" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="revised_on3">Revised on</label>
                                                                <input type="date" name="datepicker6" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="critical_elements3">Critical Elements</label>
                                                                <select class="custom-select mr-sm-2" id="select_5" name="elements_3">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Use of crackers">Use of crackers</option>
                                                                    <option value="Use of Zone Guns">Use of Zone Guns</option>
                                                                    <option value="Bird Chasers">Bird Chasers</option>
                                                                    <option value="Any Others">Any Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="status3">Findings/status</label>
                                                                <select class="custom-select mr-sm-2" id="select_6" name="status_3">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="remarks3">Remarks</label>
                                                                <textarea
                                                                    class="form-control"
                                                                    name="comment_3"
                                                                    id="comment"
                                                                    cols="20"
                                                                    rows="1"
                                                                    maxlength="20"
                                                                    placeholder="Comments.."
                                                                ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->
                                            </div> <!-- ./row -->
                                            <!-- END Content C -->
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-d" role="tabpanel" aria-labelledby="v-pills-d-tab">
                                            <!-- START Content D -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="effective_date4">Effective Date</label>
                                                                <input type="date" name="datepicker7" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="revised_on4">Revised on</label>
                                                                <input type="date" name="datepicker8" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="critical_elements4">Critical Elements</label>
                                                                <select class="custom-select mr-sm-2" id="select_7" name="elements_4">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Fuel Spillage more than 3sqm">Fuel Spillage more than 3sqm</option>
                                                                    <option value="Fuel spillage less than 3sqm">Fuel spillage less than 3sqm</option>
                                                                    <option value="Any other Occurrences">Any other Occurrences</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="status4">Findings/status</label>
                                                                <select class="custom-select mr-sm-2" id="select_8" name="status_4">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="remarks4">Remarks</label>
                                                                <textarea
                                                                    class="form-control"
                                                                    name="comment_4"
                                                                    id="comment"
                                                                    cols="20"
                                                                    rows="1"
                                                                    maxlength="20"
                                                                    placeholder="Comments.."
                                                                ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->
                                            </div> <!-- ./row -->
                                            <!-- END Content D -->
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-e" role="tabpanel" aria-labelledby="v-pills-e-tab">
                                            <!-- START Content E -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="effective_date5">Effective Date</label>
                                                                <input type="date" name="datepicker9" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="revised_on5">Revised on</label>
                                                                <input type="date" name="datepicker10" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="critical_elements5">Critical Elements</label>
                                                                <select class="custom-select mr-sm-2" id="select_9" name="elements_5">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Airprox/Air miss (Weekly)">Airprox/Air miss (Weekly)</option>
                                                                    <option value="Runway incursion (weekly)">Runway incursion (weekly)</option>
                                                                    <option value="Runway excursion (weekly)">Runway excursion (weekly)</option>
                                                                    <option value="Accident (weekly)">Accident (weekly)</option>
                                                                    <option value="Bird hit (weekly)">Bird hit (weekly)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="status5">Findings/status</label>
                                                                <select class="custom-select mr-sm-2" id="select_10" name="status_5">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Okay">Okay</option>
                                                                    <option value="Not Okay">Not Okay</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="remarks5">Remarks</label>
                                                                <textarea
                                                                    class="form-control"
                                                                    name="comment_5"
                                                                    id="comment"
                                                                    cols="20"
                                                                    rows="1"
                                                                    maxlength="20"
                                                                    placeholder="Comments.."
                                                                ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->
                                            </div> <!-- ./row -->
                                            <!-- END Content E -->
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-f" role="tabpanel" aria-labelledby="v-pills-f-tab">
                                            <!-- START Content F -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="effective_date6">Effective Date</label>
                                                                <input type="date" name="datepicker11" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="revised_on6">Revised on</label>
                                                                <input type="date" name="datepicker12" max="3000-12-31" min="1000-01-01" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="critical_elements6">Critical Elements</label>
                                                                <select class="custom-select mr-sm-2" id="select_11" name="elements_6">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Surface Friction Test Vehicle">Surface Friction Test Vehicle</option>
                                                                    <option value="Minimum Friction level last reported">Minimum Friction level last reported</option>
                                                                    <option value="Maintenance Planning level">Maintenance Planning level</option>
                                                                    <option value="Rubber Removal Machine">Rubber Removal Machine</option>
                                                                    <option value="Rubber removal last done on">Rubber removal last done on</option>
                                                                    <option value="Friction test last done on">Friction test last done on</option>
                                                                    <option value="Friction test due on">Friction test due on</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="status6">Findings/status</label>
                                                                <select class="custom-select mr-sm-2" id="select_12" name="status_6">
                                                                    <option selected>Choose...</option>
                                                                    <option value="Available">Available</option>
                                                                    <option value="Not Available">Not Available</option>
                                                                    <option value="Request Placed">Request Placed</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="remarks6">Remarks</label>
                                                                <textarea
                                                                    class="form-control"
                                                                    name="comment_6"
                                                                    id="comment"
                                                                    cols="20"
                                                                    rows="1"
                                                                    maxlength="20"
                                                                    placeholder="Comments.."
                                                                ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4"></div>
                                                    </div>
                                                </div> <!-- ./ col-lg-12 -->
                                            </div> <!-- ./row -->
                                            <!-- END Content F -->
                                        </div>
                                    </div> <!-- ./tab-content -->
                                </div>
                            </div> <!-- ./row -->
                            <!-- END GROUP A -->

                            <br>
                            <hr>
                            <br>

                            <!-- GROUP B -->
                            <h5 class="card-title text-center text-muted mb-4">Periodicity of the meetings held</h5>

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Committee</th>
                                            <th scope="col">Periodicity</th>
                                            <th scope="col">Chair Person/Chairman</th>
                                            <th scope="col">Due on</th>
                                            <th scope="col">Last conducted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Airport Advisory Committee</td>
                                            <td>Quarterly</td>
                                            <td>Minister Concerned</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_7"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_8"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Runway Safety Team</td>
                                            <td>Quarterly</td>
                                            <td>Airport Director/OIC</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_9"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_10"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Aerodrome Committee (AC)</td>
                                            <td>6 Monthly</td>
                                            <td>Dy. Commissioner</td>
                                            <td>
                                            <textarea
                                                class="form-control"
                                                name="comment_11"
                                                id="comment"
                                                cols="20"
                                                rows="1"
                                                maxlength="20"
                                                placeholder="Comments.."
                                            ></textarea>
                                            </td>
                                            <td>
                                            <textarea
                                                class="form-control"
                                                name="comment_12"
                                                id="comment"
                                                cols="20"
                                                rows="1"
                                                maxlength="20"
                                                placeholder="Comments.."
                                            ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Airport Security Committee</td>
                                            <td >Monthly</td>
                                            <td>Airport Director/OIC</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_13"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_14"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Airport Coordination Committee</td>
                                            <td>Monthly</td>
                                            <td>Airport Director/OIC</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_15"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_16"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>ATM-ENGG-CNS Coordination</td>
                                            <td>Monthly</td>
                                            <td>Airport Director/OIC</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_17"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_18"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Bomb Threat Assessment Committee (BTAC)</td>
                                            <td>Quarterly</td>
                                            <td>Airport Director/OIC</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_19"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_20"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Airport Environment Management Committee (AEMC)</td>
                                            <td>Monthly</td>
                                            <td>District Planning Officer</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_21"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_22"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>AEP Review Committee</td>
                                            <td>Yearly</td>
                                            <td>Airport Director/OIC</td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_23"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                            <td>
                                                <textarea
                                                    class="form-control"
                                                    name="comment_24"
                                                    id="comment"
                                                    cols="20"
                                                    rows="1"
                                                    maxlength="20"
                                                    placeholder="Comments.."
                                                ></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- ./table-responsive -->
                            <!-- END GROUP B -->

                            <br>

                            <!-- SECTION C -->
                                <div class="row">
                                    <div class="col-lg-4 mb-2">
                                        
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <button class="btn btn-block btn-danger">CREATE PDF</button>
                                    </div>

                                    <div class="col-lg-4">
                                        
                                    </div>
                                </div>
                            <!-- END SECTION C -->

                        </form>

                    </div> <!-- ./card-body -->
                </div> <!-- ./card -->
            </div>
            <!-- ./container -->
        </section>

        <footer id="main=footer" class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1 text-center"> Airpots Authority Of India&copy; 2019-2020 | RED Department </p>
            <p class="mb-1 text-center"><small>Develop by - Narayan Shaw (IT Apprentice)</small></p>
        </footer>
        

        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>