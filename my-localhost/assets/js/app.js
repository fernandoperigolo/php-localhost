'use strict';

// Local storage projects urls turn a object
var projectsUrls = JSON.parse(localStorage.getItem('projectsUrls'));

// In case we have urls, print then
if (projectsUrls) {
  parseURLsToHTML();
} else {
  projectsUrls = [];
}

$('#form-new-url').submit(function() {
  // Get the new URL
  var url = $('#url').val();
  var index = projectsUrls.indexOf(url);

  // In case url already existies
  if (index !== -1) {
    // Remove it
    projectsUrls.splice(index, 1);
  } else {
    // In else case, insert it
    projectsUrls.push(url);
  }

  // Save changes at Local Storage
  localStorage.setItem('projectsUrls', JSON.stringify(projectsUrls));

  // Reaload project urls
  parseURLsToHTML();

  return false;
});

function parseURLsToHTML() {
  var finalHTML = '';
  for (var i = projectsUrls.length - 1; i >= 0; i--) {
    finalHTML += '<li><a href="' + projectsUrls[i] + '">' + projectsUrls[i] + '</a></li>';
  };
  $('#custom-urls').html(finalHTML);
}