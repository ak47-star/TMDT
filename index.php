
<?php include_once "includes/index/header.php" ?>
<?php include_once "includes/index/navigation.php" ?>


<div id="siderbar"  class="contaner-fluid" >
	<div style="background-color: #EBECF4;" id="row-siderbar" class="row" >

	<div id="col-sm-siderbar" style="margin-left: 100px;padding-left: 0;" class="col-sm-3" >
    

    <div>
      <button id="btn-1" type="button"  class ="btn btn-primary">Danh sách sản phẩm</button>
    </div>

    <div class="btn-group">
      <button type="button"  id="btn-margin" class =" btn btn-primary "><a style="color: white; text-decoration: none;" href="showip.php?id=1">iphone</a></button>
    </div>

	<div><button type="button" onclick="open_script('showbphone.php')"   id="btn-nomargin"  class="btn btn-primary">Bphone</button></div>

 	 <div><button type="button" onclick="open_script('showsamsung.php')" id="btn-margin" class="btn btn-primary">sam sung</button></div>
 	  <div><button type="button" onclick="open_script('showsamsung.php')" id="btn-nomargin" class="btn btn-primary">sam sung</button></div>

     <div><button type="button" onclick="open_script('showoppo.php')" id="btn-margin" class="btn btn-primary">oppo</button></div>

 	 <div><button type="button" onclick="open_script('shownokia.php')" id="btn-nomargin" class="btn btn-primary">Nokia</button></div>

 	 <div><button type="button" onclick="open_script('showhawie.php')" id="btn-margin" class="btn btn-primary">Hawie</button></div>

 	 <div><button type="button" onclick="open_script('showphilips.php')" id="btn-nomargin"class="btn btn-primary">philips</button></div>

 	 <div><button type="button" onclick="open_script('showblackbery.php')" id="btn-margin" class="btn btn-primary">blackbery</button></div>

 	 <div>
    <button type="button" onclick="open_script('showhtc.php')" id="btn-nomargin" class="btn btn-primary">HTC</button>
  </div>
     <hr>
     <h4>Tìm Kiếm Sản Phẩm</h4>
 	 <div>
    <button type="button" id="btn-margin" class ="btn btn-primary">Dưới 1tr</button>
  </div>

	<div>
    <button type="button" id="btn-nomargin" class="btn btn-primary">1tr->3tr</button>
  </div>
  
 	 <div><button type="button"  id="btn-margin" class="btn btn-primary">3tr->7tr</button></div>
 	  <div><button type="button" id="btn-nomargin" class="btn btn-primary">7tr->12tr</button></div>
     <div><button type="button" id="btn-margin" class="btn btn-primary">12tr->20tr</button></div>
 	 <div><button type="button" id="btn-nomargin" class="btn btn-primary">Nokia</button></div>
 	 <div><button type="button" id="btn-margin" class="btn btn-primary">20tr->25tr</button></div>
 	 <div><button type="button" id="btn-nomargin" class="btn btn-primary">sp mua nhiều nhất</button></div>
 	 
 	 <div><button type="button" id="btn-margin"  class="btn btn-primary">sp mới nhất</button></div>
   </div>

  <script type="text/javascript">
    function open_script(source){

       switch(source){
        case 'showip.php':
          window.location.assign('showip.php');
        break;

        case 'showsamsung.php':
        window.location.assign('showsamsung.php');
        break;

        case 'showbphone.php' :
        window.location.assign('showsamsung.php');
        break;

        case 'showoppo.php':
        window.location.assign('showoppo.php');
        break;
        
        case 'shownokia.php':
        window.location.assign('shownokia.php');
        break;

        case 'showhawie.php':
        window.location.assign('showhawie.php');
        break;

        case 'showphilips.php':
        window.location.assign('showphilips.php');
        break;

        case 'showblackbery.php':
        window.location.assign('showblackbery.php');
        break;
        case 'showhtc.php':
        window.location.assign('showhtc.php');
        break;

        default:
        break;

       }
    }
 
  </script>


<?php include "includes/index/menu.php" ?>
   
   <div id="row-white" class="col-sm-8" ></div>
       
<?php include "includes/index/main.php" ?>

   </div>
</div>

<?php include_once "includes/index/footer.php" ?>

