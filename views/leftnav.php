<?php

  function getleftnav() {

    $pageurl = $_GET['q'];

    global $user;

    $statusClass = getStatusClass($user -> uid);

    $urloffset = substr($pageurl, (strrpos($pageurl, '/') + 1));

    //defaulting all menu items to be non-active
    $lieducation = "<li class = {$statusClass['education']}><a href=\"education\">Education</a></li>";
    $liidentity = "<li class = {$statusClass['identity']}><a href=\"identity\">Personal Information</a></li>";
    $liinternship = "<li class = {$statusClass['internship']}><a href=\"internship\">Internship</a></li>";
    $liresidency = "<li class = {$statusClass['residency']}><a href=\"residency\">Residency</a></li>";
    $liaffiliations = "<li class = {$statusClass['affiliations']}><a href=\"affiliations\">Affiliations</a></li>";
    $licertifications = "<li class = {$statusClass['certifications']}><a href=\"certifications\">Certifications</a></li>";
    $liexams = "<li class = {$statusClass['exams']}><a href=\"exams\">Exams</a></li>";
    $lilicensure = "<li class = {$statusClass['licensure']}><a href=\"licensure\">Licenses</a></li>";
    $lidisciplinary = "<li class = {$statusClass['disciplinary']}><a href=\"disciplinary\">Disciplinary  Actions</a></li>";
    $lireferences = "<li class = {$statusClass['references']}><a href=\"references\">References</a></li>";
    $liupload = "<li class = {$statusClass['upload']}><a href=\"upload\">Uploaded CV <span class=\"light\">(optional)</span></a></li>";
    $lirelease = "<li class = {$statusClass['release']}><a href=\"release\">Release &amp; Authorization</a></li>";
    $lisubmit = "<li class = {$statusClass['submit']}><a href=\"submit\">SUBMIT</a></li>";

    switch($urloffset) {
      case 'education':
        $lieducation = "<li class=\"active {$statusClass['education']}\"><a href=\"education\">Education</a></li>";
        break;
      case 'identity':
        $liidentity = "<li class=\"active {$statusClass['identity']}\"><a href=\"identity\">Personal Information</a></li>";
        break;
      case 'internship':
        $liinternship = "<li class=\"active {$statusClass['internship']}\"><a href=\"internship\">Internship</a></li>";
        break;
      case 'residency':
        $liresidency = "<li class=\"active {$statusClass['residency']}\"><a href=\"residency\">Residency</a></li>";
        break;
      case 'affiliations':
        $liaffiliations = "<li class=\"active {$statusClass['affiliations']}\"><a href=\"affiliations\">Affiliations</a></li>";
        break;
      case 'certifications':
        $licertifications = "<li class=\"active {$statusClass['certifications']}\"><a href=\"certifications\">Certifications</a></li>";
        break;
      case 'exams':
        $liexams = "<li class=\"active {$statusClass['exams']}\"><a href=\"exams\">Exams</a></li>";
        break;
      case 'licensure':
        $lilicensure = "<li class=\"active {$statusClass['licensure']}\"><a href=\"licensure\">Licenses</a></li>";
        break;
      case 'disciplinary':
        $lidisciplinary = "<li class=\"active {$statusClass['disciplinary']}\"><a href=\"disciplinary\">Disciplinary  Actions</a></li>";
        break;
      case 'references':
        $lireferences = "<li class=\"active {$statusClass['references']}\"><a href=\"references\">References</a></li>";
        break;
      case 'upload':
        $liupload = "<li class=\"active {$statusClass['upload']}\"><a href=\"upload\">Uploaded CV <span class=\"light\">(optional)</span></a></li>";
        break;
      case 'release':
        $lirelease = "<li class=\"active {$statusClass['release']}\"><a href=\"release\">Release &amp; Authorization</a></li>";
        break;
        case 'submit':
        $lisubmit = "<li class=\"active {$statusClass['submit']}\"><a href=\"submit\">SUBMIT</a></li>";
        break;
    }

    $pageleftnav = '<div id="leftNav">
  <h1>Physician<br />Application Step 1</h1>
  <ul class="menu">' . $liidentity . $lieducation . $liinternship . $liresidency . $liaffiliations . $licertifications . $liexams . $lilicensure . $lidisciplinary . $lireferences . $liupload . $lirelease . '<li class="hr"></li>' .
    $lisubmit .
  '</ul>
</div>';

    return $pageleftnav;

  }

  function getstatusClass($userid) {

    $query = db_select('vss_autosaved_forms', 'auto');
    $query -> condition('auto.uid', $userid, '=') -> fields('auto', array('path'));
    $results = $query -> execute();

    foreach ($results as $result) {
      $autosavedpaths[] = $result -> path;
    }

    $query = db_select('vss_drupal_flags', 'flags');
    $query -> condition('flags.uid', $userid, '=') -> fields('flags');
    $results = $query -> execute();

    foreach ($results as $result) {
      $flags['identity'] = ($result -> identity == 1) ? TRUE : FALSE;
      $flags['education'] = (($result -> premed == 1) && ($result -> medschool == 1)) ? TRUE : FALSE;
      $flags['internship'] = ($result -> internship == 1) ? TRUE : FALSE;
      $flags['residency'] = ($result -> residency == 1) ? TRUE : FALSE;
      $flags['affiliations'] = ($result -> affiliations == 1) ? TRUE : FALSE;
      $flags['certifications'] = (($result -> certifications == 1) && ($result -> additional_certifications == 1)) ? TRUE : FALSE;
      $flags['exams'] = (($result -> exams == 1) && ($result -> state_exams == 1)) ? TRUE : FALSE;
      $flags['licensure'] = (($result -> licensure == 1) && ($result -> licenses == 1) && ($result -> deareg == 1)) ? TRUE : FALSE;
      $flags['disciplinary'] = ($result -> disciplinary == 1) ? TRUE : FALSE;
      $flags['references'] = ($result -> ref == 1) ? TRUE : FALSE;
      //$flags['upload'] = ($result -> upload == 1) ? TRUE : FALSE;
      $flags['release'] = ($result -> release == 1) ? TRUE : FALSE;
    }

    //initialize the status classes for all the URLs
    $statusClass['identity'] = ' ';
    $statusClass['education'] = ' ';
    $statusClass['internship'] = ' ';
    $statusClass['residency'] = ' ';
    $statusClass['affiliations'] = ' ';
    $statusClass['certifications'] = ' ';
    $statusClass['exams'] = ' ';
    $statusClass['licensure'] = ' ';
    $statusClass['disciplinary'] = ' ';
    $statusClass['references'] = ' ';
    $statusClass['upload'] = ' ';
    $statusClass['release'] = ' ';
    $statusClass['submit'] = ' ';

    //Identity
    if ($flags['identity']) {
      $statusClass['identity'] = 'check';
    }
    elseif (in_array('preapp/identity', $autosavedpaths)) {
      $statusClass['identity'] = 'clock';
    }
    else {
      $statusClass['identity'] = 'red';
    }

    //Education
    if ($flags['education']) {
      $statusClass['education'] = 'check';
    }
    elseif (in_array('preapp/education', $autosavedpaths)) {
      $statusClass['education'] = 'clock';
    }
    else {
      $statusClass['education'] = 'red';
    }

    //Internship
    if ($flags['internship']) {
      $statusClass['internship'] = 'check';
    }
    elseif (in_array('preapp/internship', $autosavedpaths)) {
      $statusClass['internship'] = 'clock';
    }
    else {
      $statusClass['internship'] = 'red';
    }

    //Residency
    if ($flags['residency']) {
      $statusClass['residency'] = 'check';
    }
    elseif (in_array('preapp/residency', $autosavedpaths)) {
      $statusClass['residency'] = 'clock';
    }
    else {
      $statusClass['residency'] = 'red';
    }

    //Affiliations
    if ($flags['affiliations']) {
      $statusClass['affiliations'] = 'check';
    }
    elseif (in_array('preapp/affiliations', $autosavedpaths)) {
      $statusClass['affiliations'] = 'clock';
    }
    else {
      $statusClass['affiliations'] = 'red';
    }

    //Certifications
    if ($flags['certifications']) {
      $statusClass['certifications'] = 'check';
    }
    elseif (in_array('preapp/certifications', $autosavedpaths)) {
      $statusClass['certifications'] = 'clock';
    }
    else {
      $statusClass['certifications'] = 'red';
    }

    //Exams
    if ($flags['exams']) {
      $statusClass['exams'] = 'check';
    }
    elseif (in_array('preapp/exams', $autosavedpaths)) {
      $statusClass['exams'] = 'clock';
    }
    else {
      $statusClass['exams'] = 'red';
    }

    //Licensure
    if ($flags['licensure']) {
      $statusClass['licensure'] = 'check';
    }
    elseif (in_array('preapp/licensure', $autosavedpaths)) {
      $statusClass['licensure'] = 'clock';
    }
    else {
      $statusClass['licensure'] = 'red';
    }

    //Disciplinary
    if ($flags['disciplinary']) {
      $statusClass['disciplinary'] = 'check';
    }
    elseif (in_array('preapp/disciplinary', $autosavedpaths)) {
      $statusClass['disciplinary'] = 'clock';
    }
    else {
      $statusClass['disciplinary'] = 'red';
    }

    //References
    if ($flags['references']) {
      $statusClass['references'] = 'check';
    }
    elseif (in_array('preapp/references', $autosavedpaths)) {
      $statusClass['references'] = 'clock';
    }
    else {
      $statusClass['references'] = 'red';
    }

    //Upload
   /* if ($flags['upload']) {
      $statusClass['upload'] = 'check';
    }
    elseif (in_array('preapp/upload', $autosavedpaths)) {
      $statusClass['upload'] = 'clock';
    }
    else {
      $statusClass['upload'] = 'red';
    }*/

    //Release
    if ($flags['release']) {
      $statusClass['release'] = 'check';
    }
    elseif (in_array('preapp/release', $autosavedpaths)) {
      $statusClass['release'] = 'clock';
    }
    else {
      $statusClass['release'] = 'red';
    }

//submit

//Currently there is no flag for the submit

return $statusClass;

  }
