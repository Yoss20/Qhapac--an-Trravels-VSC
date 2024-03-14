setInterval(function() {
    $.get("/api/usuarios", function(data) {
      $("#total").text(data.total);
    });
  }, 1000);