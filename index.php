<html> 
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="img/iconTRANSPARENT.png">
  <link href="MDB/css/bootstrap.min.css" rel="stylesheet">
  <link href="MDB/css/mdb.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  

  <style>
    


    .navtop {
      height: 100px;
      margin-bottom:0px;
    }

     .affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
    height: 70px;
    padding-bottom:13px;
    
    }

  
    .affix + .container-fluid {
        padding-top: 40px;
        
    }


  .bgimg-1, .bgimg-2{

      
       background-repeat:no-repeat; 
       
       background-size:cover; 
       background-attachment:fixed;
       width:100%;
     
         

    }

    .bgimg-1{
      background-image: url(img/bg1.jpg);
       min-height:500px;  
       background-position: center;

    }

    .bgimg-2{
      background-image: url(img/bg3.jpg);
       min-height:500px;  
       background-position: top;

    }

    
    .caption {

    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    color: #000;
    }

    .caption span.border {
    background-color: #111;
    color: #fff;
    padding: 18px;
    font-size: 25px;
    letter-spacing: 10px;
    }
  
    h3{
    letter-spacing: 5px;
    text-transform: uppercase;
    font: 20px "Lato", sans-serif;
    
    }

   .plaindiv{   
    text-align: center;
    padding: 50px 80px;
    text-align: justify;

    }

    .plaindiv1{
      color: black;
    background-color: #ff7e00;
    }

    .plaindiv1 h3{
      color: #253254;
      font-weight: 600;

    }

    .plaindiv2{
     color: white;
    background-color:#253254;
    }
    
    .plaindiv2 h3{
      color: #ff7e00;
      font-weight: 600;
      

    }

    .plaindiv1 p{
    color:#253254;   
    
    }

    p{
          
      display: block;
      -webkit-margin-before: 1em;
      -webkit-margin-after: 1em;
      -webkit-margin-start: 0px;
      -webkit-margin-end: 0px;
    }

    .tac{
      text-align: center;
    }

    .plaindiv > p ,.plaindivMV{
      letter-spacing: 1px;
      font-weight: 600;
      line-height: 215%;    
    }

    
  
  .staffs{
    margin-bottom: 40px;

  }
 .staffs .row{
  margin-top: 50px;

 }

  .staffs img{
    width:140px;
    height:140px;
    vertical-align: middle;
    border-style: none;
    box-sizing: border-box;

  }
  
  h4{
    font-weight: 600;
  }


  .modal-dialog{
    top:100px;

  }

  .modalImgs img{
    width:100px;
    height:70px;
    padding: 6px;
    margin:5px;

  }

.modalImgs2{
top: 20px;
  
}

  .modalImgs2 img{
    max-width: 200px;
    height: auto;
    padding: 21px;
    margin: 15px;

  }


.footer-copyright{

  font-size:12px !important;

}


  </style>



<script>

$(document).ready(function(){
    $('#tooltip1').tooltip();
    $('#tooltip3').tooltip();   
   
});


function clipboardCopy(element) {

  
  $("#tooltip1").tooltip('destroy').on('hidden.bs.tooltip', function(){


        $('#tooltip2').tooltip({title: "Copied!", delay: {show: 500, hide: 100}});
         $('#tooltip2').tooltip('show')
        //.on('show.bs.tooltip',function(){
        //   ({title: "Copied!"});

        // }
    });



  var $temp = $("<input>");
  
  $("#testAREA").append($temp);
  $temp.val($(element).text()).select();

  document.execCommand("copy");
  $temp.remove();

}



function clipboardCopy2() {
  


 

 $("#tooltip3").tooltip('destroy').on('hidden.bs.tooltip', function(){


        $('#emailAddress').tooltip({title: "Copied!", delay: {show: 500, hide: 100}});
         $('#emailAddress').tooltip('show')
        //.on('show.bs.tooltip',function(){
        //   ({title: "Copied!"});

        // }
    });
  var $temp = $("<input>");
  
  $("body").append($temp);
  $temp.val($("#emailAddress").text()).select();

  document.execCommand("copy");
  $temp.remove();
}



</script>

</head>


<body>

<!-- 
    <nav class=" navbar navbar-inverse navtop" data-spy="affix" data-offset-top="20">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto">

            <circle cx="12" cy="12" r="10"></circle>
            <circle cx="12" cy="6" r="3"></circle>
            <ellipse cx = "12" cy="12" rx="10" ry="3"></ellipse>

          </svg>

          <img src="img/iconTRANSPARENT.png" alt="Smiley face" height="25" width="25">
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
      </div>
    </nav> -->
   

  <div class="bgimg-1">
  <div class="caption" style="top: 200px;">
    <!--<span class="border">Inferno Tower Construction Enterprise</span>-->
    <img class="border border-secondary" src="img/logo.jpg" style="height:170px; border-color:black!important;">
  </div>
</div>

<div class="plaindiv plaindiv1" style="color: #777;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Inferno Tower Construction Company, Enterprise</h3>

 
  <p class="tac" style="font-size:13px;"> provides innovative and sustainable solutions for engineering, construction, and project management. ITCE is a company built on years of leadership and a relentless adherence to our values, the core of which are safety, quality, ethics, and integrity. The management and staff are highly experienced and professional and their varied construction backgrounds enable us to help with all manner of projects situation. ITCE can help you achieve your objectives of time, cost and performance.

</p>
</div>
<div class="plaindiv plaindiv2 " style="text-align:center;padding:50px 80px;text-align: justify;">
  <div class="container">
  <div class="row">
      <div class="col">
  <h3 style="text-align:center;">MISSION</h3>

 
  <p class="tac plaindivMV" style="font-size:13px;">Our mission is to provide our client the best possible services with the most competitive price without compromising the quality, safety and environment. When it comes to our services we make sure that we keep in mind all minute detail to serve our client better and maintain a long term relationship with them.</p>
   </div>
    <div class="col">
   <h3 style="text-align:center;">VISION</h3>

 
  <p class="tac plaindivMV" style="font-size:13px;">Our goal is to become one of the leading engineering and construction works company in the Philippines by providing better services and surpass the client expectations whenever possible. We are committed to maintain the good relationship between us and the client. We prove ourselves through the actual performance in projects productivity and aim for customer satisfaction as our ultimate goal.
</p>
</div>
</div>
</div>

</div>

 <div class="bgimg-2">  
</div>

  


<div class="plaindiv plaindiv1" style="color: #777;text-align:center;padding:50px 80px;text-align: justify;">

  
  <h3 style="text-align:center;">Management and Staff</h3>
 
  <p class="tac" style="font-size:13px;">The Management and staff of Inferno Tower Construction Enterprise, is the combination of highly experienced, well trained, versatile engineer and young mind engineer to bode well toward its more flexible approach in the design and construct.
</p>
<div class="row justify-content-md-center">
  <div class=".col-6 .col-md-4">
    <a href="" style="color:white; text-decoration-line: underline; margin:20px;" data-toggle="modal" data-target="#Modal2"> OUR BUSINESS PERMITS</a>
     <a href="" style="color:white; text-decoration-line: underline; margin:20px;" data-toggle="modal" data-target="#Modal"> VIEW OUR GALLERY OF EQUIPMENTS</a>
  </div>
</div>  
</div>







<div class="container staffs" style="text-align: center;">
  <div class="row justify-content-md-center">
    <div class="col">
      <img class="rounded-circle" src="img/default-profile.png" >
      <h3 >Owner/General Manager</h3>
      <h4>Jose Alberto De Guzman</h4>

    </div>

    <div class="col">
      <img class="rounded-circle" src="img/default-profile.png" >
      <h3>Operations/Design Manager</h3>
      <h4>Gregorio Libao</h4>

    </div>
  </div>
  <div class="row justify-content-md-center">
    
    
  </div>
</div>
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body modalImgs2">

        <img src="img/permits/permit1.jpg">
        <img src="img/permits/permit2.jpg">
        <img src="img/permits/permit3.jpg">
        <img src="img/permits/permit4.jpg">        

        <!-- <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form> -->
      </div>
      <div class="modal-footer" id="testAREA">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        Contact Us:
        <div  id="tooltip1" data-toggle="tooltip" title="Copy!">
        <button id="tooltip2" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" onclick="clipboardCopy('#emailAddress')" > info@infernotowerconstruction.com</button>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body modalImgs">

        <img src="img/equipments/equip1.jpg">
        <img src="img/equipments/equip2.jpg">
        <img src="img/equipments/equip3.jpg">
        <img src="img/equipments/equip4.jpg">
        <img src="img/equipments/equip5.jpg">
        <img src="img/equipments/equip6.jpg">
        <img src="img/equipments/equip7.jpg">
        <img src="img/equipments/equip8.jpg">
        <img src="img/equipments/equip9.jpg">
        <img src="img/equipments/equip10.jpg">
        <img src="img/equipments/equip11.jpg">
        <img src="img/equipments/equip12.jpg">
        <img src="img/equipments/equip13.jpg">

        <!-- <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form> -->
      </div>
      <div class="modal-footer" id="testAREA">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        Contact Us:
        <div  id="tooltip1" data-toggle="tooltip" title="Copy!">
        <button id="tooltip2" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" onclick="clipboardCopy('#emailAddress')" > info@infernotowerconstruction.com</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4" style="background-color: #253254!important;" >

    
   <!--  <div class="container text-center text-md-left">
        <div class="row">

            
            <div class="col-md-4">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit.</p>
            </div>
            
            <hr class="clearfix w-100 d-md-none">

           
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
          

            <hr class="clearfix w-100 d-md-none">

            
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
          

            <hr class="clearfix w-100 d-md-none">

            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
           
        </div>
    </div>
   

    <hr>

    
    <div class="text-center py-3">
        <ul class="list-unstyled list-inline mb-0">
            <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
            </li>
        </ul>
    </div>
    

    <hr>
 
   
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
    </div>
    -->
    


    <!--Copyright-->
    <div class="footer-copyright py-3 text-center" " >
      <div>
        Contact Us:
            <a href="#footer">Tel. No.  +6324232912 +639065888111 +639283530000</a> 
        
        <div  id="tooltip3" data-toggle="tooltip" title="Copy!">
          Email:
        <a href="#footer" id="emailAddress" data-toggle="tooltip" data-placement="top" onclick="clipboardCopy2()" >info@infernotowerconstruction.com</a>
       </div>
      </div>
      
        © 2018 Copyright: 
        <a href="#footer">Inferno Tower Construction Enterprise Design And Construct</a>

    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
<!--<p class="tac">To give the most specialised and personalised recruitmentsolutions to both our clients and candidates whilst honour-ing and nurturing the best of professional relationships.</p><p  class="tac"> We design and construct, and do plumbing and sanitation associated works.  (e.g. Water supply, Storm/sewer, Fire fighting and chilled water pipe)</p>-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>


</html>