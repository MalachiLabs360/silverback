$( document ).ready(function() {
  $( ".solution" ).click(function() {
    var sel_id = this.id;
    switch(sel_id) {
        case "mileposts":
            window.location.href = '/products/mileposts';
            break;
        case "vitae":
            window.location.href = '/products/teachervitae';
            break;
        case "edify":
            window.location.href = '/products/edifyassess';
            break;
    }
  });
});