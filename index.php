<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">

</head>
<body>
  <div id="header">
     <div class="header text-center col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="container">
           <h5>My First Bootstrap Page</h5>
        </div>
     </div>
  </div>
  <div id="portfolio">
     <div class="container">
         <h5 class="page-section-heading text-uppercase">My First Bootstrap Page</h5>

                        <!-- Icon Divider -->
                        <!--<div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                        <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                        </div>-->
                        <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="card box-wrapper" data-toggle="modal" data-target="#myModal-01">
                                                <h5 class="text-lowercase text-center head">m1. small</h5>
                                                <div class="content text-center">
                                                        <p class="">Cpu: <b> 1</b></p>
                                                        <p class="">Ram: <b> 2GB </b></p>
                                                        <p class="">Disk: <b> 30GB </b></p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <!--<div id="footer">
                <div class="footer text-center col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="container">
                                <h6>My First Bootstrap Page</h6>
                        </div>
                </div>
        </div>-->

        <!---Modal Section -->
         <div class="modal fade" id="myModal-01" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Selected flavor : m1.small</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
                <form id="submit_form">
                     <label for="sel1">Select Boot Image:</label>
                     <select class="form-control" name="taskoption" id="taskoption">
                        <option value="rhel76">RedHat Enterprise Linux 7.6</option>
                        <option value="ubuntu1904">Ubuntu 19.04</option>
                        <option value="centos7">CentOS 7</option>
                        <option value="rhel8">RedHat Enterprise Linux 8</option>
                     </select>
                     <br />
                     <label>Flavor</label>
                     <input type="text" class="form-control"  id="flavor" value="m1.small" name="flavor" readonly>
                     <br />
                     <label>Start Date</label>
                     <input type="text" class="form-control"  id="start-date" name="start-date" readonly>
                     <br />
                     <label>End Date</label>
                     <input type="text" class="form-control"  id="end-date" name="end-date" readonly>
                     <br />
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </form>
                <div id="response"></div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="myModalLabel">Modal 2</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" id="modal-body">
                Some other modal here...
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
    </div>
</div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
