function CopyToClipboard(x) {
  // Get the desired text to copy
 // var selectText = document.getElementById('text').innerHTML;
  var selectText = x;
  // Create an input
  var input = document.createElement('input');
  // Set it's value to the text to copy, the input type doesn't matter
  input.value = selectText;
  // add it to the document
  document.body.appendChild(input);
  // call select(); on input which performs a user like selection  
  input.select();
  // execute the copy command, this is why we add the input to the document
  document.execCommand("copy");
  // remove the input from the document
  document.body.removeChild(input);
}