      <script>
    
      //validation add product form
        // product name validate
           $("#createproductbtn").hide();
           $(".pname").hide();
           $(".mp").hide();
           $(".ap").hide();
           $(".wsp").hide();
           $(".bw").hide();
           $(".tech").hide();
           $(".mb").hide();
           $(".fd").hide();
           $(".sku").hide();
           var pcategory=$("#productcat").val();
           $("#productname").focusout(function() {
              product_name();
           })
           function product_name(){
            var pname=$("#productname").val();
            var ansletter = /^([a-zA-Z_0-9]+\s?)*$/;
            if(pname.length==''){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter Product name");
              $("#createproductbtn").hide();
              return false;
            } else if(!pname.match(ansletter)){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter valid product name Ex: Windows hosting");
              $("#createproductbtn").hide();
            } else{
              $(".pname").hide();
              product_m_price();
              //$("#createproductbtn").show();
            }
            } 
            
            $("#mprice").focusout(function() {
              product_m_price();
             })

            function product_m_price() {
                var monthlyprice=$("#mprice").val();
                var regex = /^[0-9-+()]*$/;
                if(monthlyprice.length==''){
                $(".mp").show();
                $(".mp").focus();
                $(".mp").html("** Please enter  monthly price");
                $("#createproductbtn").hide();
                } else if(!monthlyprice.match(regex)){
                $(".mp").show();
                $(".mp").focus();
                $(".mp").html("** Please enter valid monthly price Ex: 120.00");
                $("#createproductbtn").hide();
                } else {
                  $(".mp").hide();
                  product_a_price();
                 // $("#createproductbtn").show();
                }
               
            }

            $("#aprice").focusout(function() {
              product_a_price();
             })

             function product_a_price() {
              var annualyprice=$("#aprice").val();
              var regex = /^[0-9-+()]*$/;
                if(annualyprice.length==''){
                $(".ap").show();
                $(".ap").focus();
                $(".ap").html("** Please enter  annualy price");
                $("#createproductbtn").hide();
                } else if(!annualyprice.match(regex)){
                $(".ap").show();
                $(".ap").focus();
                $(".ap").html("** Please enter valid annualy price Ex: 120.00");
                $("#createproductbtn").hide();
                } else {
                  $(".ap").hide();
                  sku_id_validate();
                  //$("#createproductbtn").show();
                }
            }


            // sku validate 
            $("#skuid").focusout(function(){
              sku_id_validate();
            });
            function sku_id_validate(){
              var skuid=$("#skuid").val();
              var regex = /^[a-zA-Z0-9-+(#_)]*$/;
              if(skuid.length==''){
                $(".sku").show();
                $(".sku").focus();
                $(".sku").html("** Please enter SKU ID");
                $("#createproductbtn").hide();
                } else if(!skuid.match(regex)){
                $(".sku").show();
                $(".sku").focus();
                $(".sku").html("** Please enter Valid SKU ID Ex: WINDOW#12");
                $("#createproductbtn").hide();
                } else {
                  $(".sku").hide();
                  sku_websp_validate();
                 // $("#createproductbtn").show();
                }
            }
            // web space validate 
            $("#wspace").focusout(function(){
              sku_websp_validate();
            });

            function sku_websp_validate(){
              var webspace=$("#wspace").val();
              var regex = /^[0-9-+(.)]*$/;
              if(webspace.length==''){
                $(".wsp").show();
                $(".wsp").focus();
                $(".wsp").html("** Please enter Web Space In MB");
                $("#createproductbtn").hide();
                } else if(!webspace.match(regex)){
                $(".wsp").show();
                $(".wsp").focus();
                $(".wsp").html("** Please enter Valid web space Ex:12");
                $("#createproductbtn").hide();
                } else {
                  $(".wsp").hide();
                  bandwidth_validate();
                  //$("#createproductbtn").show();
                }
            }
            // band width validate 
            $("#bwidth").focusout(function(){
              bandwidth_validate();
            });

            function bandwidth_validate(){
              var bandwidth=$("#bwidth").val();
              var regex = /^[0-9-+(.)]*$/;
              if(bandwidth.length==''){
                $(".bw").show();
                $(".bw").focus();
                $(".bw").html("** Please enter bandWidth In MB");
                $("#createproductbtn").hide();
                } else if(!bandwidth.match(regex)){
                $(".bw").show();
                $(".bw").focus();
                $(".bw").html("** Please enter Valid Bandwidth Ex:12");
                $("#createproductbtn").hide();
                } else {
                  $(".bw").hide();
                  fd_validate();
                 // $("#createproductbtn").show();
                }
            }

            // free domain validate 
             $("#fdomain").focusout(function(){
              fd_validate();
            });

            function fd_validate(){
              var freedomain=$("#fdomain").val();
              var regex = /^[0-9-+()]*$/;
              if(freedomain.length==''){
                $(".fd").show();
                $(".fd").focus();
                $(".fd").html("** Please enter Number of free domain");
                $("#createproductbtn").hide();
                } else if(!freedomain.match(regex)){
                $(".fd").show();
                $(".fd").focus();
                $(".fd").html("** Please enter Free Domain Ex: 2");
                $("#createproductbtn").hide();
                } else {
                  $(".fd").hide();
                  tech_validate();
                 // $("#createproductbtn").show();
                }
            }
            // technology validate 
            $("#technology").focusout(function(){
                tech_validate();
            });

            function tech_validate(){
              var technology=$("#technology").val();
              var regex = /^[a-zA-Z,]*$/;
              if(technology.length==''){
                $(".tech").show();
                $(".tech").focus();
                $(".tech").html("** Please enter Technology name");
                $("#createproductbtn").hide();
                } else if(!technology.match(regex)){
                $(".tech").show();
                $(".tech").focus();
                $(".tech").html("** Please enter Valid Technology Name Ex: JAVA,PHP ");
                $("#createproductbtn").hide();
                } else {
                  $(".tech").hide();
                  mail_validate();
                 // $("#createproductbtn").show();
                }
            }
             // mailbox validate 
             $("#mailbox").focusout(function(){
                mail_validate();
            });

            function mail_validate(){
              var technology=$("#mailbox").val();
              var regex = /^[0-9]*$/;
              if(technology.length==''){
                $(".mb").show();
                $(".mb").focus();
                $(".mb").html("** Please enter Number Of Mailbox");
                $("#createproductbtn").hide();
                } else if(!technology.match(regex)){
                $(".mb").show();
                $(".mb").focus();
                $(".mb").html("** Please enter number only Ex: 2 ");
                $("#createproductbtn").hide();
                } else {
                  $(".mb").hide();
                  $("#createproductbtn").show();
                }
            }



            ///////////////////////////////////////////////////////





//validation add product form
        // product name validate
           $("#createcatbtn").hide();
           $(".pcat").hide();
           $(".pname").hide();
           $(".avail").hide();
           var pname=$("#productname").val();
            var purl=$("#producturl").val();
            var pavail=$("#available").val();
           $("#productname").focusout(function() {
              product_name();
           })
           function product_name(){
            var pname=$("#productname").val();
            var ansletter = /^([a-zA-Z_0-9]+\s?)*$/;
            if(pname.length==''){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter Product name");
              $("#createcatbtn").hide();
              return false;
            } else if(!pname.match(ansletter)){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter valid product name Ex: Windows hosting");
              $("#createcatbtn").hide();
            } else{
              $(".pname").hide();
              $("#createcatbtn").show();
            }
            } 
            
            $("#mprice").focusout(function() {
              product_avil(); 
             })

            function product_avil() {
                 var pavail=$("#available").val();
                var regex = /^[0-9-+()]*$/;
                if(pavail.length==''){
                $(".avail").show();
                $(".avail").focus();
                $(".avail").html("** Please Select Availbility");
                $("#createproductbtn").hide();
                } else {
                  $(".avail").hide();
                 
                  $("#createcatbtn").show();
                }
               
            }
</script>
<script>
//mobile number regEx
var mobile = (\+?1[-.(\s]?|\()?(9|8|7|6(0|4|5|6|7|8|3)\3+)[)\s]?[-.\s]?\d{4}[-.\s]?\d{5};
productname=/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z]+[0-9]+\-[0-9]+$))|(^([a-zA-Z]+[a-zA-Z0-9]+$))|(^([a-zA-Z])+$)/
price=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/
sku=/^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/
bandwidth=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/
email=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
language-tech=/(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/
</script>
          