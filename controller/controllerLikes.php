<script>
function controlLike(v,n) {
  var flagBien=false;
  var flagRegular=false;
  var flagMal=false;
  /* Bloque para tiempo real*/
  if(document.getElementById('bien'+n).className === "btn btn-success"){ flagBien = true; }
  if(document.getElementById('regular'+n).className === "btn btn-warning"){ flagRegular = true; }
  if(document.getElementById('mal'+n).className === "btn btn-danger"){ flagMal = true; }
  /* Bloque para tiempo real*/
  if(v === "bien"){
    if(document.getElementById('bien'+n).className === "btn btn-success"){
      document.getElementById('bien'+n).className = "btn btn-light";
      cleart("lb",n);
      change(4,n,"lb","b","bien");
    }
    else{

      if(flagRegular === true){ cleart("lr",n); change(5,n,"lr","r","regular"); }
      if(flagMal === true){ cleart("lm",n); change(6,n,"lm","m","mal"); }

      document.getElementById('bien'+n).className = "btn btn-success";
      document.getElementById('regular'+n).className = "btn btn-light";
      document.getElementById('mal'+n).className = "btn btn-light";
      /*primer  caso para bien*/
      cleart("lb",n);
      change(1,n,"lb","b","bien");
      /*primer  caso para bien*/
    }
  }
  else{
    if(v === "regular"){
      if(document.getElementById('regular'+n).className === "btn btn-warning"){
        document.getElementById('regular'+n).className = "btn btn-light";
        cleart("lr",n);
        change(5,n,"lr","r","regular");
      }
      else{

        if(flagBien === true){ cleart("lb",n); change(4,n,"lb","b","bien"); }
        if(flagMal === true){ cleart("lm",n); change(6,n,"lm","m","mal"); }

        document.getElementById('regular'+n).className = "btn btn-warning";
        document.getElementById('bien'+n).className = "btn btn-light";
        document.getElementById('mal'+n).className = "btn btn-light";
        /*primer  caso para regular*/
        cleart("lr",n);
        change(2,n,"lr","r","regular");
        /*primer  caso para regular*/
      }
    }
    else{
      if(v === "mal"){
        if(document.getElementById('mal'+n).className === "btn btn-danger"){
          document.getElementById('mal'+n).className = "btn btn-light";
          cleart("lm",n);
          change(6,n,"lm","m","mal");
        }
        else{

          if(flagBien === true){ cleart("lb",n); change(4,n,"lb","b","bien"); }
          if(flagRegular === true){ cleart("lr",n); change(5,n,"lr","r","regular"); }

          document.getElementById('mal'+n).className = "btn btn-danger";
          document.getElementById('bien'+n).className = "btn btn-light";
          document.getElementById('regular'+n).className = "btn btn-light";
          /*primer  caso para mal*/
          cleart("lm",n);
          change(3,n,"lm","m","mal");
          /*primer  caso para mal*/
        }
      }
    }
  }
}

function cleart(like,n){
    $("#"+like+n).remove();
}

function change(iu,n,lx,x,brm){
  var idu=iu;
  var id=n;
  $.ajax({
      url:"model/modelLikes.php",
      data: {idu:idu,id:id},
      type:"POST",
      success:function(data){
          if(data != false){
              for (var i = 0; i < data.length; i++) {  
                var idlx = lx+n;
                $("#"+x+id).append("<a class='alert-link' id='"+idlx+"'>"+data[i][brm]+"</a>");
              }
          } 
      }
  })
} 
</script>