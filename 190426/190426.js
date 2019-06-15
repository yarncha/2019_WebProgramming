function addLink() {
  var pageName = prompt("Enter item name : ", );
  if (pageName == "" || pageName == null) {
    alert("Are you leaving?");
  } else {
    var pageURL = prompt("Enter url : ", );
    if (pageURL == "" || pageURL == null) {
      alert("Are you really going to leave?");
    } else {
      var liNode = document.createElement("LI");
      var aNode = document.createElement("A");
      var textnode = document.createTextNode(pageName);
      liNode.appendChild(aNode);
      aNode.setAttribute("href",pageURL);
      aNode.appendChild(textnode)

      document.getElementsByTagName("ol")[0].appendChild(liNode);
    }
  }
}
