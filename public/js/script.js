$(document).ready(function(){
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /*Desaparecer alerts*/
  setTimeout(function(){ $('.success-message').fadeOut(); }, 1000);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /*Selects Dinámicos*/
   $(".selectTwo").select2({tags:true});
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 /*Añadir al carrito*/
  $('.btn-add').click(function(){
  var $id = $(this).data('id');
  var $qty = $('#input-qty'+$id).val();
  $('.shop').html('<div class="alert alert-primary">Procesando Información...</div>');
  $.ajax({
    headers:{
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    },
    url:'/addToCar',
    type:'POST',
    dataType:'json',
    data:{id:$id,qty:$qty},
    success:function(data){
        $('#input-qty'+$id).val("");
      if(data.error.length > 0){
        $('.shop').html('<div class="alert alert-danger">'+ data.error +'</div>');
          setTimeout(function(){ $('.shop').html(''); }, 1000);
      }else {
        var $count = data.count;
        $('#badge').html($count);
        $('#nav-count').html($count);
        var $precioLedplus = new Intl.NumberFormat().format(data.totalLedplus)+' USD';
        var $precioWireplus = new Intl.NumberFormat().format(data.totalWireplus)+' USD';
        var $premiumLedplus = new Intl.NumberFormat().format(data.ledplusPremium)+' Bs.S';
        var $premiumWireplus = new Intl.NumberFormat().format(data.wireplusPremium)+' Bs.S';
        var $preciopkcell = new Intl.NumberFormat().format(data.totalpkcell)+' USD';
        var $preciometalnet = new Intl.NumberFormat().format(data.totalmetalnet)+' USD';
        var $premiumpkcell = new Intl.NumberFormat().format(data.totalpkcellPremium)+' Bs.S';
        var $premiummetalnet = new Intl.NumberFormat().format(data.totalmetalnetPremium)+' Bs.S';
        
        var $premiumRCG = new Intl.NumberFormat().format(data.totalRCGPremium)+' Bs.S';
        var $premiumMVTEAM = new Intl.NumberFormat().format(data.totalMVTEAMPremium)+' Bs.S';
        var $premiumNETVISION = new Intl.NumberFormat().format(data.totalNETVISIONPremium)+' Bs.S';
        var $premiumCAPITAL = new Intl.NumberFormat().format(data.totalCAPITALPremium)+' Bs.S';
        var $premiumASG = new Intl.NumberFormat().format(data.totalASGPremium)+' Bs.S';
        var $premiumECOGREEN = new Intl.NumberFormat().format(data.totalECOGREENPremium)+' Bs.S';
        var $premiumHIKVISION = new Intl.NumberFormat().format(data.totalHIKVISIONPremium)+' Bs.S';
        var $premiumCHUANGO = new Intl.NumberFormat().format(data.totalCHUANGOPremium)+' Bs.S';
        var $premium3M = new Intl.NumberFormat().format(data.total3MPremium)+' Bs.S';

        var $precioRCG = new Intl.NumberFormat().format(data.totalRCG)+' USD';
        var $precioMVTEAM = new Intl.NumberFormat().format(data.totalMVTEAM)+' USD';
        var $precioNETVISION = new Intl.NumberFormat().format(data.totalNETVISION)+' USD';
        var $precioCAPITAL = new Intl.NumberFormat().format(data.totalCAPITAL)+' USD';
        var $precioASG = new Intl.NumberFormat().format(data.totalASG)+' USD';
        var $precioECOGREEN = new Intl.NumberFormat().format(data.totalECOGREEN)+' USD';
        var $precioHIKVISION = new Intl.NumberFormat().format(data.totalHIKVISION)+' USD';
        var $precioCHUANGO = new Intl.NumberFormat().format(data.totalCHUANGO)+' USD';
        var $precio3M = new Intl.NumberFormat().format(data.total3M)+' USD';
        
        var $totalPremium = new Intl.NumberFormat().format(data.totalRealPremium.toFixed(2)) +' Bs.S';
        var $totalReal  = new Intl.NumberFormat().format(data.totalReal.toFixed(2)) +' USD';
        $('#totalLedplus').html($precioLedplus);
        $('#totalWireplus').html($precioWireplus);
        
        $('#totalRCG').html($precioRCG);
        $('#totalMVTEAM').html($precioMVTEAM);
        $('#totalNETVISION').html($precioNETVISION);
        $('#totalCAPITAL').html($precioCAPITAL);
        $('#totalASG').html($precioASG);
        $('#totalECOGREEN').html($precioECOGREEN);
        $('#totalHIKVISION').html($precioHIKVISION);
        $('#totalCHUANGO').html($precioCHUANGO);
        $('#total3M').html($precio3M);

        $('#RCGPremium').html($premiumRCG);
        $('#MVTEAMPremium').html($premiumMVTEAM);
        $('#NETVISIONPremium').html($premiumNETVISION);
        $('#CAPITALPremium').html($premiumCAPITAL);
        $('#ASGPremium').html($premiumASG);
        $('#ECOGREENPremium').html($premiumECOGREEN);
        $('#CHUANGOPremium').html($premiumCHUANGO);
        $('#HIKVISIONPremium').html($premiumHIKVISION);
        $('#3MPremium').html($premium3M);

        $('#ledplusPremium').html($premiumLedplus);
        $('#wireplusPremium').html($premiumWireplus);
        $('#totalPremium').html($totalPremium);
        $('#totalpkcell').html($preciopkcell);
        $('#totalmetalnet').html($preciometalnet);
        $('#pkcellPremium').html($premiumpkcell);
        $('#metalnetPremium').html($premiummetalnet);
        $('#totalPremium').html($totalPremium);
        $('#total').html($totalReal);
        $('.shop').html('');

        if(data.singleProduct.company == "wireplus"){
          $('#wireplusCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "ledplus"){
          $('#ledplusCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "metalnet"){
          $('#metalnetCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "pkcell"){
          $('#pkcellCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "RCG"){
          $('#RCGCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "MVTEAM"){
          $('#MVTEAMCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "NETVISION"){
          $('#NETVISIONCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "CAPITAL"){
          $('#CAPITALCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "ASG"){
          $('#ASGCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "3M"){
          $('#3MCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }if(data.singleProduct.company == "ECOGREEN"){
          $('#ECOGREENCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }
        if(data.singleProduct.company == "CHUANGO"){
          $('#CHUANGOCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }
        if(data.singleProduct.company == "HIKVISION"){
          $('#HIKVISIONCartList .inside').append('<div class="row"><div class="col-md-12">' + data.singleProduct.title +'x'+ $qty +'</div></div>');
        }
      }//dataerrorlength
    },
  });
});//Añadir al carrito

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*Quitar del carrito*/
$('.btn-remove-cart').click(function(){
var $rowId = $(this).data('id');
$.ajax({
  headers:{
    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
  },
  url:'/removeOfCart',
  type:'POST',
  dataType:'json',
  data:{rowId:$rowId},
  success:function(data){
    var $qty = parseInt($('#qty'+$rowId).html());
    $qty--;
    $('#qty'+$rowId).html($qty);
    $('#rowId' + $rowId).fadeOut();
    $('.ajax-response').html('<div class="alert alert-success success-message">'+data.success+'</div>');
    var $totalLedplus = parseInt($('#totalLedplus').html());
    var $totalWireplus = parseInt($('#totalWireplus').html());
    setTimeout(function(){ $('.success-message').fadeOut(); }, 5000);
    
        var $premiumRCG = new Intl.NumberFormat().format(data.totalRCGPremium);
        var $premiumMVTEAM = new Intl.NumberFormat().format(data.totalMVTEAMPremium);
        var $premiumNETVISION = new Intl.NumberFormat().format(data.totalNETVISIONPremium);
        var $premiumCAPITAL = new Intl.NumberFormat().format(data.totalCAPITALPremium);
        var $premiumASG = new Intl.NumberFormat().format(data.totalASGPremium);
        var $premiumECOGREEN = new Intl.NumberFormat().format(data.totalECOGREENPremium);
        var $premiumCHUANGO = new Intl.NumberFormat().format(data.totalCHUANGOPremium);
        var $premiumHIKVISION = new Intl.NumberFormat().format(data.totalHIKVISIONPremium);
        var $premium3M = new Intl.NumberFormat().format(data.total3MPremium);
        
        var $precioRCG = new Intl.NumberFormat().format(data.totalRCG);
        var $precioMVTEAM = new Intl.NumberFormat().format(data.totalMVTEAM);
        var $precioNETVISION = new Intl.NumberFormat().format(data.totalNETVISION);
        var $precioCAPITAL = new Intl.NumberFormat().format(data.totalCAPITAL);
        var $precioASG = new Intl.NumberFormat().format(data.totalASG);
        var $precio3M = new Intl.NumberFormat().format(data.total3M);
        var $precioECOGREEN = new Intl.NumberFormat().format(data.totalECOGREEN);
        var $precioHIKVISION = new Intl.NumberFormat().format(data.totalHIKVISION);
        var $precioCHUANGO = new Intl.NumberFormat().format(data.totalCHUANGO);

        
        $('#totalRCG').html($precioRCG);
        $('#RCGPremium').html($premiumRCG);
        
        $('#totalMVTEAM').html($precioMVTEAM);
        $('#MVTEAMPremium').html($premiumMVTEAM);
        
        $('#totalNETVISION').html($precioNETVISION);
        $('#NETVISIONPremium').html($premiumNETVISION);
        
        $('#totalCAPITAL').html($precioCAPITAL);
        $('#CAPITALPremium').html($premiumCAPITAL);
        
        $('#totalASG').html($precioASG);
        $('#ASGPremium').html($premiumASG);
        
        $('#totalECOGREEN').html($precioECOGREEN);
        $('#ECOGREENPremium').html($premiumECOGREEN);
        
        $('#totalCHUANGO').html($precioCHUANGO);
        $('#HIKVISIONPremium').html($premiumHIKVISION);
        
        $('#total3M').html($precio3M);
        $('#3MPremium').html($premium3M);
        
        $('#totalWireplus').html(new Intl.NumberFormat().format(data.totalWireplus));
        $('#totalLedplus').html(new Intl.NumberFormat().format(data.totalLedplus));
        $('#ledplusPremium').html(new Intl.NumberFormat().format(data.ledplusPremium));
        $('#wireplusPremium').html(new Intl.NumberFormat().format(data.wireplusPremium));
        $('#totalmetalnet').html(new Intl.NumberFormat().format(data.totalmetalnet));
        $('#totalpkcell').html(new Intl.NumberFormat().format(data.totalpkcell));
        $('#pkcellPremium').html(new Intl.NumberFormat().format(data.totalpkcellPremium));
        $('#metalnetPremium').html(new Intl.NumberFormat().format(data.totalmetalnetPremium));
        $('#subtotal').html(new Intl.NumberFormat().format(data.subtotal));
        $('#subtotalPremium').html(new Intl.NumberFormat().format(data.subtotalPremium));
        $('#iva').html(new Intl.NumberFormat().format(data.iva));
        $('#ivaPremium').html(new Intl.NumberFormat().format(data.ivaPremium));
        $('#totalReal').html(new Intl.NumberFormat().format(data.totalReal.toFixed(2)));
        $('#totalRealPremium').html(new Intl.NumberFormat().format(data.totalRealPremium.toFixed(2)));
    if(data.cartCount <= 0){
      $('#Pedido').hide();
    }
    },
  });
});//Quitar del carrito

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Actualizar Carrito
$('.update-cart').on('input',function(){
  var $rowId = $(this).data('id');
  var $qty = $('#qty-input'+$rowId).val();
  if($qty <= 1 || $qty == null){
    $qty = 1;
    $('#qty-input'+$rowId).disabled = true;
  }//endif
  $.ajax({
    headers:{
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    },
    url:'/updateFromCart',
    type:'POST',
    dataType:'json',
    data:{rowId:$rowId,qty:$qty},
    success:function(data){
        $('.alert-cart').html('<div class="alert alert-success success-message">'+data.success+'</div>');
        setTimeout(function(){ $('.success-message').fadeOut(); }, 2500);
        var $premiumRCG = new Intl.NumberFormat().format(data.totalRCGPremium);
        var $premiumMVTEAM = new Intl.NumberFormat().format(data.totalMVTEAMPremium);
        var $premiumNETVISION = new Intl.NumberFormat().format(data.totalNETVISIONPremium);
        var $premiumCAPITAL = new Intl.NumberFormat().format(data.totalCAPITALPremium);
        var $premiumASG = new Intl.NumberFormat().format(data.totalASGPremium);
        var $premiumECOGREEN = new Intl.NumberFormat().format(data.totalECOGREENPremium);
        var $premiumCHUANGO = new Intl.NumberFormat().format(data.totalCHUANGOPremium);
        var $premiumHIKVISION = new Intl.NumberFormat().format(data.totalHIKVISIONPremium);
        var $premium3M = new Intl.NumberFormat().format(data.total3MPremium);
        
        var $precioRCG = new Intl.NumberFormat().format(data.totalRCG);
        var $precioMVTEAM = new Intl.NumberFormat().format(data.totalMVTEAM);
        var $precioNETVISION = new Intl.NumberFormat().format(data.totalNETVISION);
        var $precioCAPITAL = new Intl.NumberFormat().format(data.totalCAPITAL);
        var $precioASG = new Intl.NumberFormat().format(data.totalASG);
        var $precioECOGREEN = new Intl.NumberFormat().format(data.totalECOGREEN);
        var $precioCHUANGO = new Intl.NumberFormat().format(data.totalCHUANGO);
        var $precioHIKVISION = new Intl.NumberFormat().format(data.totalHIKVISION);
        var $precio3M = new Intl.NumberFormat().format(data.total3M);
        
        $('#totalRCG').html($precioRCG);
        $('#RCGPremium').html($premiumRCG);
        
        $('#totalMVTEAM').html($precioMVTEAM);
        $('#MVTEAMPremium').html($premiumMVTEAM);
        
        $('#totalNETVISION').html($precioNETVISION);
        $('#NETVISIONPremium').html($premiumNETVISION);
        
        $('#totalCAPITAL').html($precioCAPITAL);
        $('#CAPITALPremium').html($premiumCAPITAL);
        
        $('#totalASG').html($precioASG);
        $('#ASGPremium').html($premiumASG);
        
        $('#totalECOGREEN').html($precioECOGREEN);
        $('#ECOGREENPremium').html($premiumECOGREEN);
        
        $('#totalHIKVISION').html($precioHIKVISION);
        $('#CHUANGOPremium').html($premiumCHUANGO);
        
        $('#total3M').html($precio3M);
        $('#3MPremium').html($premium3M);
        
        $('#totalWireplus').html(new Intl.NumberFormat().format(data.totalWireplus));
        $('#totalLedplus').html(new Intl.NumberFormat().format(data.totalLedplus));
        $('#ledplusPremium').html(new Intl.NumberFormat().format(data.ledplusPremium));
        $('#wireplusPremium').html(new Intl.NumberFormat().format(data.wireplusPremium));
        $('#totalmetalnet').html(new Intl.NumberFormat().format(data.totalmetalnet));
        $('#totalpkcell').html(new Intl.NumberFormat().format(data.totalpkcell));
        $('#pkcellPremium').html(new Intl.NumberFormat().format(data.totalpkcellPremium));
        
        $('#totalpkcell').html(new Intl.NumberFormat().format(data.totalpkcell));
        $('#pkcellPremium').html(new Intl.NumberFormat().format(data.totalpkcellPremium));
        
        $('#metalnetPremium').html(new Intl.NumberFormat().format(data.totalmetalnetPremium));
        $('#subtotal').html(new Intl.NumberFormat().format(data.subtotal));
        $('#subtotalPremium').html(new Intl.NumberFormat().format(data.subtotalPremium));
        $('#iva').html(new Intl.NumberFormat().format(data.iva));
        $('#ivaPremium').html(new Intl.NumberFormat().format(data.ivaPremium));
        $('#totalReal').html(new Intl.NumberFormat().format(data.totalReal.toFixed(2)));
        $('#totalRealPremium').html(new Intl.NumberFormat().format(data.totalRealPremium.toFixed(2)));
        $('.multiqty'+$rowId).html(new Intl.NumberFormat().format(data.multiqty));
        $('.multiqtyPremium'+$rowId).html(new Intl.NumberFormat().format(data.multiqtyPremium));
    }//success
  });//endajax
});//Actualizar Carrito


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Rif//////////////////////////////////////////////////////////////
$('#RIF').on('keyup', function(){
  var rif = $('#RIF').val();
  $.ajax({
    headers:{
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    },
    url:'/searchForRif',
    type:'POST',
    dataType:'json',
    data:{rif:rif},
    success:function(data){
      if (rif.length == 0) {
        $('#data-user-bill').html('');
      }
      $('#data-user-bill').html('<div class="form-group col-md-3"><label for="companyName">Nombre de la Empresa del Cliente:</label><input id="companyName" type="text" disabled class="form-control" value="'+data.user.companyName+'"></div>');
    }//success
  });//endajax
});//Rif

$('#Pedido').on('click', function(){
    $('.shop').html('<div class="alert alert-primary">Procesando Información...</div>');
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////Modal///////
$('.btnModal').mousedown(function(){
   var dataId = $(this).data('id'); 
   $('.modal-container' + dataId).css('display', 'block');
});
$('.modal-container').mouseup(function(){
   var dataId = $(this).data('id'); 
   $('.modal-container' + dataId).css('display', 'none');
});



});
