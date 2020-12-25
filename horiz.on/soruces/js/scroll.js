  $(function(){
    $("html, body").mousewheel(function(event, delta) {
      this.scrollLeft -= (delta * 300);
      event.preventDefault();
    });
  });