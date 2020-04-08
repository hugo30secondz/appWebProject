<script>
function controlLike(v,n) {

  if(v === "bien"){
    if(document.getElementById('bien'+n).className === "btn btn-success"){
      document.getElementById('bien'+n).className = "btn btn-light";
    }
    else{
      document.getElementById('bien'+n).className = "btn btn-success";
      document.getElementById('regular'+n).className = "btn btn-light";
      document.getElementById('mal'+n).className = "btn btn-light";
    }
  }
  else{
    if(v === "regular"){
      if(document.getElementById('regular'+n).className === "btn btn-warning"){
        document.getElementById('regular'+n).className = "btn btn-light";
      }
      else{
        document.getElementById('regular'+n).className = "btn btn-warning";
        document.getElementById('bien'+n).className = "btn btn-light";
        document.getElementById('mal'+n).className = "btn btn-light";
      }
    }
    else{
      if(v === "mal"){
        if(document.getElementById('mal'+n).className === "btn btn-danger"){
          document.getElementById('mal'+n).className = "btn btn-light";
        }
        else{
          document.getElementById('mal'+n).className = "btn btn-danger";
          document.getElementById('bien'+n).className = "btn btn-light";
          document.getElementById('regular'+n).className = "btn btn-light";
        }
      }
    }
  }
}
</script>