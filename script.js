function hide_show() {
    var x = document.getElementsByClassName('hide_show');
    if (x.style.display === 'block') {
      x.style.display = 'none';
    } else {
      x.style.display = 'block';
    }

    // console.log("hello");
    // var y = document.getElementsByClassName("see_more");
    // y.style.display = "none";
  }