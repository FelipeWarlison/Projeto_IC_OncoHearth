document.getElementById("questionarios").addEventListener("change", mostraEscondeForm);
function mostraEscondeForm() {

  var x = document.getElementById("questionarios").selectedIndex;

  if(x == 1){
    var elements = document.getElementsByClassName("q1");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = true;
    }
    var elements = document.getElementsByClassName("q2");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q3");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q4");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q5");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q6");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    document.getElementById("a").style.display = "block";
    document.getElementById("b").style.display = "none";
    document.getElementById("c").style.display = "none";
    document.getElementById("d").style.display = "none";
    document.getElementById("e").style.display = "none";
    document.getElementById("f").style.display = "none";
  } else if (x == 2) {
    var elements = document.getElementsByClassName("q1");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q2");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = true;
    }
    var elements = document.getElementsByClassName("q3");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q4");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q5");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q6");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    document.getElementById("a").style.display = "none";
    document.getElementById("b").style.display = "block";
    document.getElementById("c").style.display = "none";
    document.getElementById("d").style.display = "none";
    document.getElementById("e").style.display = "none";
    document.getElementById("f").style.display = "none";
  } else if (x == 3) {
    var elements = document.getElementsByClassName("q1");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q2");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q3");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = true;
    }
    var elements = document.getElementsByClassName("q4");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q5");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q6");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    document.getElementById("a").style.display = "none";
    document.getElementById("b").style.display = "none";
    document.getElementById("c").style.display = "block";
    document.getElementById("d").style.display = "none";
    document.getElementById("e").style.display = "none";
    document.getElementById("f").style.display = "none";
  } else if (x == 4) {
    var elements = document.getElementsByClassName("q1");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q2");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q3");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q4");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = true;
    }
    var elements = document.getElementsByClassName("q5");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q6");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    document.getElementById("a").style.display = "none";
    document.getElementById("b").style.display = "none";
    document.getElementById("c").style.display = "none";
    document.getElementById("d").style.display = "block";
    document.getElementById("e").style.display = "none";
    document.getElementById("f").style.display = "none";
  } else if (x == 5) {
    var elements = document.getElementsByClassName("q1");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q2");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q3");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q4");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q5");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = true;
    }
    var elements = document.getElementsByClassName("q6");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    document.getElementById("a").style.display = "none";
    document.getElementById("b").style.display = "none";
    document.getElementById("c").style.display = "none";
    document.getElementById("d").style.display = "none";
    document.getElementById("e").style.display = "block";
    document.getElementById("f").style.display = "none";
  } else if (x == 6) {
    var elements = document.getElementsByClassName("q1");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q2");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q3");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q4");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q5");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = false;
    }
    var elements = document.getElementsByClassName("q6");
    for(var i=0; i<elements.length; i++) {
    elements[i].required = true;
    }
    document.getElementById("a").style.display = "none";
    document.getElementById("b").style.display = "none";
    document.getElementById("c").style.display = "none";
    document.getElementById("d").style.display = "none";
    document.getElementById("e").style.display = "none";
    document.getElementById("f").style.display = "block";
  }
}
